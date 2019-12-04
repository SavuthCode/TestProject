<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProperty extends FormRequest
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
            'name'             => 'required|min:3|max:10|string',
            'zone_id'          => 'required',
            'property_type_id' => 'required',
            'shape_id'         => 'required',
            'rent_price'        => 'required|numeric',
            'sold_price'       => 'required|numeric',
            'list_price'       => 'required|numeric',
            'sale_price'       => 'required|numeric',
        ];
        
    }
    public function messages()
    {
        return [
            'name.required'              => 'Product name is required',
            'zone_id.required'           => 'Zone is required',
            'property_type_id.required'  => 'Type is required',
            'shape_id.required'          => 'Shape is required',
            'rent_price.required'        => 'Rent price is required',
            'sold_price.required'        => 'Sold price required',
            'list_price.required'        => 'List price required',
            'sale_price.required'        => 'Sale price is required',
            'sale_price.numeric'         => 'Sale price must be a integer',
            'list_price.numeric'         => 'List price must be a integer',
            'sold_price.numeric'         => 'Sold price must be a integer',
            'rent_price.numeric'         => 'Rent price must be a integer',
        ];
    }
}
