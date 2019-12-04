<?php
 
namespace App\Libraries;
 
class PropertyLib
{
    public static function createPropertyPriceHistory($new, $old = false)
    {
        $data['new_price'] = $new->price;
        if($old) {
            if($new->price != $old->price) {
                $data['old_price'] = $old->price;
                $new->property_price_histories()->create($data);
            }
        } 
        else {
            if($new->price) $new->property_price_histories()->create($data);
        }
    }
}