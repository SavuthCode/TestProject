<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Libraries\MyTypeTrait\MyTypeTrait;

class PropertyStatus extends Model
{
    use MyTypeTrait;
    protected $fillable = ['name', 'created_by', 'updated_by'];
    public function property()
    {
        return $this->belongsTo('App\Models\Property', 'property_status', 'id');
    }
    public function getCodeAttribute()
    {
        return str_pad($this->id, '6', '0', STR_PAD_LEFT);
    }
}
