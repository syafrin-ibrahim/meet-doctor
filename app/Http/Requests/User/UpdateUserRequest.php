<?php

namespace App\Http\Requests\User;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\Rule;
class UpdateUserRequest extends FormRequest
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
            'name' => [
                'required','string','max:255',
            ],
            'email' => [
                'required','email','max:255',Rule::unique('users')->ignore($this->user),
            ],
            'password' => [
                'required','string','max:255','mixedCase',
            ],
        ];
    }
}
