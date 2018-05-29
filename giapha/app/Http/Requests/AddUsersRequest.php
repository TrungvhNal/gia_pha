<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddUsersRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txtBoMeVoChong' => 'required',
            'txtFullName' => 'required',
            'txtNameShort' =>'required',
            'txtBirthday' =>'required',
            'txtAddress' =>'required',
        ];
    }
    public function messages()
    {
        return [
            'txtFullName.required' => 'Họ tên là bắt buộc nhập.',
            'txtBirthday.required' => 'Ngày sinh là bắt buộc nhập.',
            'txtAddress.required' => 'Địa chỉ hiện tại là bắt buộc nhập.'
        ];
    }
}
