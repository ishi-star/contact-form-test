<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            //
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],

            'email' => ['required', 'string', 'email', 'max:255'],
            'phone_area_code' => ['required', 'max:5'],
            'phone_number_1' => ['required', 'max:5'],
            'phone_number_2' => ['required', 'max:5'],
            'gender' => ['required',  'in:男性,女性,その他'],
            'address' => ['required', 'string', 'max:255'],
            'building' => ['required', 'string', 'max:255'],
            'detail' => ['required', 'string', ],
            'content' => ['required', 'string', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => '性を入力してください',
            'last_name.max' => '名前を255文字以下で入力してください',

            'first_name.required' => '名を入力してください',
            'first_name.max' => '名を255文字以下で入力してください',

            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',

            'phone_area_code.required' => '電話番号を入力してください',
            'phone_area_code.max' => '電話番号は5桁までの数字で入力してください',
            'phone_number_1.required' => '電話番号を入力してください',
            'phone_number_1.max' => '電話番号は5桁までの数字で入力してください',
            'phone_number_2.required' => '電話番号を入力してください',
            'phone_number_2.max' => '電話番号は5桁までの数字で入力してください',

            'gender.required' => '性別を選択してください',
            'gender.in' => '性別を選択してください',

            'address.required' => '住所を入力してください',
            'address.string' => '住所を文字列で入力してください',
            'address.max' => '住所を255文字以下で入力してください',

            'building.required' => '住所を入力してください',
            'building.string' => '住所を文字列で入力してください',
            'building.max' => '住所を255文字以下で入力してください',

            'detail.required' => 'お問い合わせの種類を選択してください',

            'content.required' => 'お問い合わせ内容を入力してください',
            'content' => 'お問い合わせ内容を120文字で入力してください',
        ];
    }
}
