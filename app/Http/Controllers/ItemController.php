<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $item = Item::where('user_id', '=', $user->id)
        ->get();

        return view('shopping.index', 
        compact('user', 'item'));
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        
        Item::create([
            'name' => $request->name,
            'user_id' => $user->id
        ]);

        

        return redirect('/dashboard');
    }
}
