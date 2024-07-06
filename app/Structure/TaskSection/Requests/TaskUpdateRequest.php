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
            'title'   => 'required|string|max:100',
            'status'  => 'required|string|max:50',
            'date'    => 'required|string|date',
            'dedline' => 'required|string|date',
            'content' => 'required|string|max:255',
        ];
    }   
}


