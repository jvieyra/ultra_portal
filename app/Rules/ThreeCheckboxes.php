<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ThreeCheckboxes implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    protected $count;

    public function __construct($count)
    {
        $this->count = $count;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value){
        if($this->count >= 3){
            return count($value) == 3;
        }

        if($this->count == 2){
            return count($value) == 2;
        }

        if($this->count == 1){
            return count($value) == 1;
        }
        
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(){
        $count = $this->count;
        if($this->count >= 3){
           return 'Debes seleccionar 3 clases de workshops. Se te asignara una de esas 3 clases, aleatoriamente.'; 
        }

        if($this->count == 2){
            return 'Debes seleccionar 2 clases de workshops. Se te asignara una de esas 2 clases, aleatoriamente.';    
        }

        if($this->count == 1){
            return 'Debes seleccionar esta clase.';    
        }
        
    }
}
