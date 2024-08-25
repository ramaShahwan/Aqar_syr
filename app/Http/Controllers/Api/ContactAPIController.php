<?php
   namespace App\Http\Controllers\Api;

   use App\Http\Controllers\Controller;
   use Illuminate\Http\Request;
   use App\Models\Contact;
   use Illuminate\Support\Facades\Validator;

   class ContactAPIController extends Controller
   {
       use ApiResponseTrait;

       public function store(Request $request)
       {
           $validator = Validator::make($request->all(), [
               'name' => 'required',
               'phone' => 'required|max:14|min:10',
               'message' => 'required|max:255',
           ]);
       
           if ($validator->fails()) {
               return $this->apiResponse(null, $validator->errors(), 400);
           }
       
           $contact = new Contact;
           $contact->name = $request->name;
           $contact->phone = $request->phone;
           $contact->message = $request->message;
           $contact->save();
           
           if ($contact) {
               return $this->apiResponse($contact, 'The contact is saved', 201);
           }
       
           return $this->apiResponse(null, 'This contact not save', 400);
       }
   

   

}
