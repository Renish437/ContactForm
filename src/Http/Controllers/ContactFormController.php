<?php 
namespace codewithren\contactform\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use codewithren\contactform\Models\Contact;

class ContactFormController extends BaseController{
    public function create(){
        return view('contactform::create');
    }
    public function store(Request $request){
       
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required',
        ]);
      
        Contact::create($validated);
        
        return back()->with('success', 'Information submitted successfully');
    }
}