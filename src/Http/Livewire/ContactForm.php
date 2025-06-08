<?php

namespace codewithren\contactform\Http\Livewire;

use codewithren\contactform\Models\Contact;
use codewithren\contactform\Mail\InquiryEmail;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
  public $name, $email, $message;

  public function submitContactForm(){
   $validated= $this->validate([
        'name' => 'required|min:3',
        'email' => 'required',
        'message' => 'required',
    ]);
    Contact::create($validated);
    $this->reset('name', 'email', 'message');
    $admin_email = config('contactform.admin-email');

    if($admin_email==null || $admin_email==''){
      $this->dispatch('alert-error', 
    
    message:'The value of admin-email is null'
  );
    }else{
      Mail::to($admin_email)->send(new InquiryEmail($validated));

    }
    $this->dispatch('alert', 
    
    message:'Information submitted successfully'
  );
  }
  public function render()
    {
        return view('contactform::livewire.contact-form');
    }
}
