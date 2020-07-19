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
