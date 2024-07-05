<?php

namespace App\Structure\TaskSection\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskAddRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'status'  => 'required|string',
            'date'    => 'required|string',
            'content' => 'required|string',
        ];
    }   
}

