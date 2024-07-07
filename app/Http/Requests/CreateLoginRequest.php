<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Factory as ValidationFactory;
use Illuminate\Validation\Rule;

class CreateLoginRequest extends FormRequest
{
  protected function failedValidation(Validator $validator) {
    throw new HttpResponseException(
      response()->json([
        'message' => $validator->errors()->first()
      ], 422)
    );
  }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'password'=>'required|min:6',
            'email'=>'required'




        ];
    }
}
