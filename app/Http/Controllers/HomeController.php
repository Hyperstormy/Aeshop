<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $item = Item::all();

        $data['item'] = $item;

        return view('home',$data);
    }

    public function store(){

        $item = new Item();

        $item->item_type = request('item_type');
        $item->item_name = request('item_name');
        $item->item_price = request('item_price');

        $item->save();

        return redirect('/home')->with('msg', 'Added Successfully!');

    }

    public function destroy($id){

        $item = Item::findOrFail($id);
        $item->delete();

        return redirect('/home')->with('msg', 'Deleted Successfully!');

    }
}
