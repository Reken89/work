<?php

namespace App\Structure\TaskSection\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskFilterRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'datestart' => 'required|string|date',
            'datestop'  => 'required|string|date',
            'status'    => 'required|array',
        ];
    }   
}
