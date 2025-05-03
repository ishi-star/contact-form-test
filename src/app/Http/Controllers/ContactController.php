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
      'last_name',
      'first_name',
      'gender', 
      'email',
      'phone_area_code', 
      'phone_number_1', 
      'phone_number_2', 
      'tel', 
      'address',
      'building',
      'detail', 
      'content',
    ]);
    // return view('confirm', ['contact' => $contact]);
    return view('confirm', compact('contact'));
  }

  // public function store(Request $request)
  public function store(ContactRequest $request)
  {

    $tel = $request->phone_area_code . $request->phone_number_1 . $request->phone_number_2;
    
    $contact = $request->only([
      'last_name',
      'first_name',
      'gender', 
      'email', 
      // 'tel', 
      'address',
      'building',
      'detail',
      'content',
    ]);

    Contact::create($contact);
    return view('thanks');
  }

}
