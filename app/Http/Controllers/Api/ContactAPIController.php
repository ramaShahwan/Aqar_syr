<?php
   namespace App\Http\Controllers\Api;

   use App\Http\Controllers\Controller;
   use Illuminate\Http\Request;
   use App\Models\Contact;

   class ContactAPIController extends Controller
   {
       use ApiResponseTrait;

       public function store(Request $request)
       {
            $validator = Validator([
               'name' => 'required',
               'email' => 'required|email',
               'message' => 'required|max:255',
             ]);
             if ($validator->fails()) {
                return $this->apiResponse(null, $validator->errors(), 400);
            }
           $contact = new Contact;
           $contact->name = $request->name;
           $contact->email = $request->email;
           $contact->message = $request->message;
           $contact->save();
           
           if($contact){
            return $this->apiResponse($contact, 'The contact is saved', 201);
        }
        return $this->apiResponse(null, 'This contact not save', 400);
       }
   

   

}
