<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Item extends Model
{
    use Sortable;
    
    protected $table = 'items';

    public $sortable = ['id', 'item_type', 'item_name', 'item_price'];

    public function scopeSort($query,$item_type){

        return $query = Item::where('item_type', $item_type);

    }
}
