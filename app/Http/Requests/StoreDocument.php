<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDocument extends FormRequest
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
            'name' => 'required',
            'document_type' => 'required',
            //'file' => 'file|mimes:pdf'
            'file.*' => 'file|mimes:pdf,docx,doc,xls,xlsx,ppt,pptx'
        ];
    }
}
