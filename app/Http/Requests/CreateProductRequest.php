<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'prdname'      => 'bail|required|string|min:3|max:255',
            'prdprice'     => 'bail|required|double|min:0|max:20000',
            'prdcate'      => 'bail|required|not_in:0',
            'prdbrand'     => 'bail|required|not_in:0',
            'sdescription' => 'required',
            'ldescription' => 'required',
            'featureimg'   => 'required|file|image|mimes:jpeg,png,jpg|max:10240',
            'relateimg1'   => 'bail|required||file|image|mimes:jpeg,png,jpg|max:10240',
            'relateimg2'   => 'bail|required||file|image|mimes:jpeg,png,jpg|max:10240',
            'relateimg3'   => 'bail|required||file|image|mimes:jpeg,png,jpg|max:10240'
        ];
    }

    public function message()
    {
        return [
            'prdname.required'            => 'Product title can not be blank !',
            'prdname.string'              => 'Product title must be string !',
            'prdname.min'                 => 'Product title has min 3 characters !',
            'prdname.max'                 => 'Product title has min 255 characters !',
            'prdprice.required'           => 'Price can not be blank !',
            'prdprice.min'                => 'Price has min >= 0 !',
            'prdprice.max'                => 'Price has max <= 20000 !',
            'prdcate.required'            => 'Please choose one of them !',
            'prdbrand.required'           => 'Please choose one of them !',
            'sdescription.required'       => 'Short Description can not be blank !',
            'ldescription.required'       => 'Long Description can not be blank !',
            'featureimg.required'         => 'Feature Image can not be blank !',
            'featureimg.mimes'            => 'Image must be .JPEG or .PNG or .JPG !',
            'featureimg.file'             => 'Image must be image file !',
            'featureimg.max'              => 'Image size can not over 10MB !',
            'relateimg1.mimes'            => 'Image must be .JPEG or .PNG or .JPG !',
            'relateimg1.file'             => 'Image must be image file !',
            'relateimg1.max'              => 'Image size can not over 10MB !',
            'relateimg1.required'         => 'Image can not be blank !',
            'relateimg2.mimes'            => 'Image must be .JPEG or .PNG or .JPG !',
            'relateimg2.file'             => 'Image must be image file !',
            'relateimg2.max'              => 'Image size can not over 10MB !',
            'relateimg2.required'         => 'Image can not be blank !',
            'relateimg3.mimes'            => 'Image must be .JPEG or .PNG or .JPG !',
            'relateimg3.file'             => 'Image must be image file !',
            'relateimg3.max'              => 'Image size can not over 10MB !',
            'relateimg3.required'         => 'Image can not be blank !'
        ];
    }

    public function attributes()
    {
        return [
            'prdname'       => 'Product Title',
            'prdprice'      => 'Product Price',
            'prdcate'       => 'Categories',
            'prdbrand'      => 'Brands',
            'sdescription'  => 'Short Description',
            'ldescription'  => 'Long Description',
        ];
    }
}
