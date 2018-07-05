<?php
/**
 * Created by PhpStorm.
 * User: toqua
 * Date: 3/18/2018
 * Time: 3:09 PM
 */

namespace App\Http\Requests;


class PartnerRequest extends Request
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

    public function rules(){
        if (in_array($this->method(), ['POST', 'PUT'])) {
            return [
                'brand_name' => 'required|max:255',
                'brand_image_file' => 'mimes:jpeg,bmp,png,gif|max:4000',
                'address' => 'required|max:255',
                'ward' => 'required|max:255',
                'district' => 'required|max:255',
                'city' => 'required|max:255',
                'home_phone' => 'required|max:15',
                'mobile_phone' => 'required|max:15',
                'facebook' => 'url|max:15',
                'email' => 'between:3,64|email|required',
                'business_registration_number' => 'required|max:45',
                'business_registration_image_file' => 'mimes:jpeg,bmp,png,gif|max:4000|required',
                'website' => 'url|max:15',
                'establish_date' => 'date|required',
                'registration_image_file' => 'mimes:jpeg,bmp,png,gif|max:4000|required',
                'tax_number' => 'max:15',
                'vice_gerent' => 'required|max:255',
                'contact_name' => 'required|max:255',
                'contact_home_phone' => 'required|max:15',
                'contact_mobile_phone' => 'required|max:15',
                'contact_email' => 'email|required'
            ];
        }
        return [];


    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'website.url' => 'Not a valid URL format.',
        ];
    }
}