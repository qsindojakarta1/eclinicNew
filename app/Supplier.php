<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $guarded = [];

    public function purchase()
    {
        return $this->hasMany(Purchase::class);
    }
}
