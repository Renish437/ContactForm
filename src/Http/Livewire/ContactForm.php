<?php

namespace codewithren\contactform\Http\Livewire;

use codewithren\contactform\Models\Contact;
use codewithren\contactform\Mail\InquiryEmail;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
  public $name, $email, $message;

  public function submitContactForm()
  {
    $validated = $this->validate([
      'name' => 'required|min:3',
      'email' => 'required',
      'message' => 'required',
    ]);

    $admin_email = config('contactform.admin-email');

    if ($admin_email == null || $admin_email == '') {
      $this->dispatch('alert-error', message: 'The value of admin-email is null');
      return;
    }

    
    Mail::to($admin_email)->queue(new InquiryEmail($validated));
    $this->dispatch('alert', message: 'Email submitted successfully');
    Contact::create($validated);
    $this->reset(['name', 'email', 'message']);
     
   
  }
  public function render()
  {
    return view('contactform::livewire.contact-form');
  }
}
