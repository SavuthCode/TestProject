<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Libraries\MyTypeTrait\MyTypeTrait;

class Property extends Model
{
    use MyTypeTrait;
    public static function boot()
    {
        parent::boot();
        static::created(function($obj) {
            $obj->code = str_pad($obj->id, '6', '0', STR_PAD_LEFT);
            $obj->save();
        });
    }
    protected $fillable = ['name', 'code', 'property_type_id', 'property_status_id', 'zone_id', 'shape_id', 'rent_price', 'sale_price', 'list_price', 'sold_price', 'created_by', 'updated_by'];
    public function zone()
    {
        return $this->belongsTo('App\Models\Zone',  'zone_id', 'id');
    }
    public function shape()
    {
        return $this->belongsTo('App\Models\Shape', 'shape_id', 'id');
    }
    public function type()
    {
        return $this->belongsTo('App\Models\PropertyType', 'property_type_id', 'id');
    }
    public function status()
    {
        return $this->belongsTo('App\Models\PropertyStatus', 'property_status_id', 'id');
    }
    public function property_price_histories()
    {
        return $this->hasMany('App\Models\PropertyPriceHistory', 'property_id', 'id');
    }

    

}
