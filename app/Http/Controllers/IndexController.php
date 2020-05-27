<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class IndexController extends Controller
{
   public function index(){
  
      $item = Item::paginate(1);

      $data['item'] = $item;

      return view('welcome',$data);

   }

   public function sort(){

      $sort = request('item_type');

      $data['item'] = Item::sort($sort);

      return view('welcome',$data);

   }
}
