<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;


class ItemController extends Controller
{
    public function destroy(Item $item)
    {

        $item->delete();


        return redirect()->route('items.posts')->with('success', 'Товар успешно удален');
    }
    public function edit(Item $item)
    {
        return view('layouts.admin.items.edit', compact('item'));
    }

    public function update(Request $request, Item $item)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);


        $item->update($validatedData);


        return redirect()->route('items.posts')->with('success', 'Товар успешно обновлен');
    }

    public function create()
    {
        return view('layouts.admin.items.create');
    }
    public function store(Request $request)
    {
        // Валидация данных
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        // Создание нового товара
        $item = Item::create($validatedData);

        return redirect()->route('items.posts')->with('success', 'Товар успешно обновлен');

    }
    public function posts()
    {
        $items = Item::all();
        return view('layouts.admin.items.posts', compact('items'));
    }



}
