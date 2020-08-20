<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHilRequest extends FormRequest
{
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
     * @return array
     */
    public function rules()
    {
        return [
            'date' => 'date',
            'labcarname' => 'string',
            'machinename' => 'string',
            'osversion' => 'string',
            'projectname' => 'string',
            'selectedServers' => 'string',
            'labcarType' => 'string',
            'autorun' => 'boolean',
        ];
    }
}
