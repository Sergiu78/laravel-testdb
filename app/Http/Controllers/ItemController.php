<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::get();
        return view('welcome', compact('items'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(ItemRequest $request)
    {
        
        $data = $request->validated();
        
        Item::create($data);
        return redirect('/');
    }
    public function edit($id)
    {
        $item = Item::find($id);
        return view('edit', compact('item'));
    }
    public function update(ItemRequest $request,  $id)
    {

        $data = $request->validated();
        $item = Item::find($id);
        $item->update($data);
        return redirect('/');
    }
    public function destroy($item)
    {
        $deleted = Item::destroy($item);

        return back();
       
        
    }
}
