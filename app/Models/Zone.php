<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Libraries\MyTypeTrait\MyTypeTrait;

class Zone extends Model
{
    use MyTypeTrait;
    protected $fillable = ['name', 'created_by', 'updated_by'];
    public function property()
    {
        return $this->hasOne('App\Models\Property', 'zone_id', 'id');
    }
    public function getCodeAttribute()
    {
        return str_pad($this->id, '6', '0', STR_PAD_LEFT);
    }
}
