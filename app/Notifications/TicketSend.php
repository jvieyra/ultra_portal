<?php

namespace App\Notifications;


use App\User;
use App\Ticket;


use Illuminate\Bus\Queueable;
use Jenssegers\Date\Date;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class TicketSend extends Notification
{

	protected $ticket;
	use Queueable;



	/**
	 * Create a new notification instance.
	 *
	 * @return void
	 */
	public function __construct($ticket){
		$this->ticket = $ticket;
	}

	/**
	 * Get the notification's delivery channels.
	 *
	 * @param  mixed  $notifiable
	 * @return array
	 */
	public function via($notifiable)
	{
		return ['database'];
	}

	/**
	 * Get the mail representation of the notification.
	 *
	 * @param  mixed  $notifiable
	 * @return \Illuminate\Notifications\Messages\MailMessage
	 */
	public function toMail($notifiable){

		return (new MailMessage)
				->line('The introduction to the notification.')
				->action('Notification Action', url('/'))
				->line('Thank you for using our application!');
	}

	/**
	 * Get the array representation of the notification.
	 *
	 * @param  mixed  $notifiable
	 * @return array
	 */
	public function toArray($notifiable){

		$ticketArray = $this->ticket->toArray();

		$dateForHumans = $this->ticket->created_at->diffForHumans();

		foreach ($this->ticket->users as $user) {
			$user = User::find($user->pivot->send_user_id);
			$name = $user->name . ' ' .$user->last_name;
			$ticketArray['send_user_name'] = $name;
			$ticketArray['dateForHumans'] = $dateForHumans;
		}

		return $ticketArray;
	}

	public function setCreatedAtAttribute($date){
  	return new Date($date);
  }

}
