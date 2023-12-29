<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|alpha',
            'pagecount'=>'required|integer',
            'point'=>'required|integer',
        ];
    }

    public function message(): array
    {
        return [
            'name.required'=>'Please enter name',
            'name.alpha'=>'please enter the alphabet value for name',
            'pagecount.required'=>'Please enter pagecount',
         //   'pagecount.'=>'Please enter valid pagecount',
            'point.required'=>'Please enter point',
            'point.numeric'=>'Please enter valid point'
        ];
    }
}
