<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Libraries\MyTypeTrait\MyTypeTrait;

class PropertyPriceHistory extends Model
{
	use MyTypeTrait;
    protected $fillable = ['property_id', 'rent_price', 'sale_price', 'list_price', 'sold_price'];
    public function property()
    {
        return $this->belongsTo('App\Models\Property',  'property_id', 'id');
    }
}
