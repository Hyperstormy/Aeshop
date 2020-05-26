<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class IndexController extends Controller
{
   public function index(){

        $item = Item::all();

        $data['item'] = $item;

        return view('welcome',$data);
   }
}
