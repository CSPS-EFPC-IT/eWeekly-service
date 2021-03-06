<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDocument extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'document_type' => 'required',
            //'file' => 'sometimes|file|mimes:pdf'
            'file.*' => 'sometiems|file|mimes:pdf,docx,doc,xls,xlsx,ppt,pptx'
        ];
    }
}
