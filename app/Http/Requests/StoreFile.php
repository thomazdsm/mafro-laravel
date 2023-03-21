<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class StoreFile extends FormRequest
{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'file' => [
                'required',
                File::types(['png', 'jpg', 'pdf'])
                    ->max(5 * 1024),
            ]
        ];
    }
}
