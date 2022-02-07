<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact as ModelContact;

class Contact extends Component
{
    public $name;
    public $email;
    public $subject;
    public $phone;
    public $message;
    
    protected function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'subject' => ['required'],
            'phone' => ['required'],
            'message' => ['required'],
        ];
    }
   

    public function submit()
    {
        $this->validate();
 
        // Execution doesn't reach here if validation fails.
 
        ModelContact::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'phone' => $this->phone,
            'message' => $this->message,

        ]);
        $from = $this->email;
        $to = "info@rfs-congo.com";
        $subject = $this->subject ;
        $message = $this->message;
        
        $headers = 'From: ' .$from . "\r\n" .
        'Reply-To:'. $from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        mail($to,$subject,$message, $headers);

        $this->name = "";
        $this->email = "";
        $this->subject = "";
        $this->phone = "";
        $this->message = "";
        session()->flash('message', 'Votre message a été envoyé avec succes');
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
