<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\CreateContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'name' => 'required',
        //     // 'email' => 'required'| 'string'|'lowercase'|'email'| 'max:255',
        //     'phone' => 'phone|min:10,max:14',
        //     'message' => 'required|max:255',
        //   ]);

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back() ;
        // return redirect()->back()->with('message','تم الإضافة');
    }

    public function index(Request $request)
    {
        // $search=$request->search;
        // $contacts=Contact::when($search, function ($query, $search)
        // {$query->where('name','like','%'.$search.'%');
        // })->get();
        $contacts=Contact::all();
        return view('admin.contectadmin',compact('contacts'));
    }

    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->back();
    }
}
