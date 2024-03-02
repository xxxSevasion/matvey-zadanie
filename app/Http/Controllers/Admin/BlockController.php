<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.block.index',[
            'blocks' => SpladeTable::for(Block::class)
                ->withGlobalSearch(columns: ['title', 'content'])
//            ->selectFilter('category_id', $categories, label: "Категории")
                ->column('img', label: 'Картинка')
                ->column('text', label: 'Текст')
                ->column('action', label: "Действие")
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.block.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $block = new Block();
        $block->img = $request->file('img')->store('public/block');
        $block->text = $request->input('text');
        $block->isActive = $request->input('isActive');
        $block->save();
        Toast::title('Новая форма успешно добавлена');
        return redirect()->route('block.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Block $block)
    {
        return view('admin.block.edit', compact('block'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Block $block)
    {
        $block->text = $request->input('text');
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $filename = $img->getClientOriginalName();
            $img->storeAs('public/block', $filename);
            $block->img = $filename;
        }
        $block->isActive = $request->input('isActive');
        $block->save();
        Toast::title('Новая форма успешно добавлена');
        return redirect()->route('block.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Block $block)
    {
        $block->delete();
        Toast::title('Отзыв удален');
        return redirect()->route('block.index');
    }
}
