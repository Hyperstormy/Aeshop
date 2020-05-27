<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    public function scopeSort($query,$item_type){

        return $query = Item::where('item_type', $item_type);

    }
}
