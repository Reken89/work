<?php

namespace App\Structure\TaskSection\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskUpdateRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id'      => 'required|integer',
            'title'   => 'required|string',
            'status'  => 'required|string',
            'date'    => 'required|string',
            'dedline' => 'required|string',
            'content' => 'required|string',
        ];
    }   
}


