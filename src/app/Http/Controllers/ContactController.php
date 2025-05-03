<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
  public function index()
  {
    return view('index');
  }//

  // public function confirm(Request $request)
  public function confirm(ContactRequest $request)
  {
    $contact = $request->only([
      'name', 
      'gender', 
      'email', 
      'tel', 
      'address', 
      'inquiry_type', 
      'content',
    ]);
    // return view('confirm', ['contact' => $contact]);
    return view('confirm', compact('contact'));
  }

  // public function store(Request $request)
  public function store(ContactRequest $request)
  {
    $contact = $request->only([
      'name',
      'gender', 
      'email', 
      'tel', 
      'address',
      'inquiry_type',
      'content',
    ]);

    Contact::create($contact);
    return view('thanks');
  }

}
