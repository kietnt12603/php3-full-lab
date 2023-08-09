<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapSV extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'masv'=>['required','regex:/^PD\d{5,}$/'],
            'hoten'=>'required', 'min:3', 'max:20',
            'tuoi' => ['required','regex:/^(1[6-9]|[2-9][0-9]|100)$/'],
            'ngaysinh' => 'required','date','regex:/^\d{1,2}\/\d{1,2}\/\d{4}$/',
            'cmnd' => ['required','regex:/^\d{9}$|^\d{12}$/'],
            'email' => 'required|regex:/^[a-zA-Z0-9._%+-]+@fpt\.edu\.vn$/'
        ];
    }

    function messages()
    {
        return [
            'masv.required' =>'Mã Sinh Viên Không Được Để Trống',
            'masv.regex' => 'Mã Sinh Viên Không Đúng Định Dạng',
            'hoten.required' => 'Họ Tên Không Được Để Trống',
            'hoten.min' => 'Họ Tên Sao Ngắn Quá Vậy',
            'hoten.max' => 'Họ Tên Quá Dài Bồ Ơi',
            'tuoi.required'=>'Tuổi Không Được Để Trống',
            'tuoi.regex'=>'Tuổi Phải Từ 16 Đến 100',
            'ngaysinh.required' => 'Ngày Sinh Không Được Để Trống',
            'ngaysinh.regex'=>'Ngày Sinh Không Đúng Định Dạng',
            'cmnd.required' =>'CMND Không Được Để Trống',
            'cmnd.regex' =>'CMND Không Đúng Định Dạng',
            'email.required' =>'Email Không Được Để Trống',
            'email.regex' =>'Email Không Đúng Định Dạng @fpt.edu.vn'
        ];   
    }

    function attributes()
    {
        return [
            'masv' =>'Mã Sinh Viên',
            'hoten' => 'Họ Tên',
            'tuoi' => 'Tuổi',
            'ngaysinh' => 'Ngày Sinh',
            'cmnd' => 'Căn Cước Công Dân',
            'email' => 'Email'
        ];
    }

}
