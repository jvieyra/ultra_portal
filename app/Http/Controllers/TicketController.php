<?php
namespace App\Http\Controllers;

use Mail;
use App\Year;
use App\User;

use Validator;
use App\Ticket;
use App\Category;
use App\Department;

use Carbon\Carbon;

use App\Notifications\TicketSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TicketCreateRequest;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Pagination\Paginator;

class TicketController extends Controller {

	public function __construct(){
		$this->middleware('auth');
	}

	public function index(){
		if(request()->ajax()){
			return Auth::user()->unreadNotifications;
		}

		$unreadNotifications = Auth::user()->unreadNotifications;
		
		return view('staff.tickets.index',[
			'unreadNotifications' => Auth::user()->unreadNotifications,
			'readNotifications' => Auth::user()->readNotifications,
			'notifications' => Auth::user()->notifications()->paginate(20)
		]);
	}

	public function create(){
		$categories =  Category::all();
		return view('staff.tickets.create',compact('categories'));
	}

	##show tickets configurations
	public function ticketAdmin(){
		return view('staff.admin.tickets');
	}

	public function sendMailTicket($userSend,$userReceive){
		$userS = User::find($userSend);
		$userR = User::find($userReceive);

		//$data = array('name' => "Sam","body"=>"Email");
		$data = [ $userS, $userR];
		Mail::send('emails.ticket',["data" => $data],function($message) use ($userS,$userR){
			$message->to($userR->email,'Tickets Itjvallereal')
							->subject('Nuevo ticket Recibido');
			$message->from($userS->email ,$userS->name ." ".$userS->last_name);
		});
	}

	## Tickets
	public function store(TicketCreateRequest $request){
		//if(!$request->ajax()) return redirect('staff/home');
		$user = Auth::user();
		$year = new Year();
		$currentYear = $year->currentYear();
		$today = Carbon::now('America/Mexico_City');

			try{

				DB::beginTransaction();
				//$ticket = new Ticket();

				$ticket = Ticket::create([
					'description' => $request->description,
					'send_datetime' => $today,
					'civil_protection' => $request->civil_protection,
					'status_id' => 3,
					'year_id' => $currentYear
				]);

				$sendUser = $user->id;
				$receiveUser = $request->userTicket;
				
				$ticket->users()
					->attach($ticket->id,['send_user_id'=> $sendUser , 'receive_user_id' => $receiveUser]);
				$ticket->categories()
					->attach($ticket->id,['category_id' => $request->category ]);


				if($request->hasFile('files')){

					##dd($request->file('files'));	
				$files = $request->file('files');

					/*for(  $i = 0; $i < sizeof($files); $i++ ){
						DB::table('file_ticket')
										->insert(['ticket_id' => $ticket->id ,'name' => $files[$i]->getClientOriginalName(),'file_path' => $files[$i]->store('tickets') ]);
					}*/


					for(  $i = 0; $i < sizeof($files); $i++ ){
						\Storage::disk('local')->put('tickets/'.$ticket->id.'_'.$files[$i]->getClientOriginalName(),  \File::get($files[$i]));
						DB::table('file_ticket')
										->insert(['ticket_id' => $ticket->id ,
															'name' => $files[$i]->getClientOriginalName(),
															'file_path' => 'tickets/'.$ticket->id.'_'.$files[$i]->getClientOriginalName() ]);
					}


				}

				##notifications
				$recipient = User::find($receiveUser);
				$recipient->notify(new TicketSend($ticket));

				$this->sendMailTicket($sendUser,$receiveUser);
				DB::commit();
				
			}catch( Exception $e){
				DB::rollback();
				return $e;
			}
 
			
		}

		public function show($id) {
			$notification = DatabaseNotification::find($id);
			
			if($notification->markAsRead()){
					$notification->markAsRead();
			}
			
			$unreadNotifications = Auth::user()->unreadNotifications;
			$ticket = Ticket::findOrFail(DatabaseNotification::find($id)->data['id']);
			//dd(DatabaseNotification::find($id)->data['id']);
			$userSend = User::findOrFail($ticket->users->first()->pivot->first()->send_user_id);

			$files = DB::table('file_ticket')->where('ticket_id', DatabaseNotification::find($id)->data['id'])->get();
			
			return view('staff.tickets.show',compact('ticket','unreadNotifications','userSend','files','notification'));
		}

		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function edit($id){
				//
		}

		/**
		 * Update the specified resource in storage.
		 *
		 * @param  \Illuminate\Http\Request  $request
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function update(Request $request, $id){
			//
		}

		/**
		 * Remove the specified resource from storage.
		 *
		 * @param  int  $id
		 * @return \Illuminate\Http\Response
		 */
		public function destroy($id)
		{
				//
		}



		public function charts(){
			return  view('staff.admin.charts-tickets');
		}
}
