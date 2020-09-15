<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStockCategory;
use App\StockCategory;
use Illuminate\Http\Request;

class StockCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stock-category.index',[
            'stockCategories' => StockCategory::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stock-category.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStockCategory $request)
    {
        StockCategory::create($request->all());
        return redirect(route('stock-categories.create'))->with('info', 'Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StockCategory  $stockCategory
     * @return \Illuminate\Http\Response
     */
    public function show(StockCategory $stockCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StockCategory  $stockCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(StockCategory $stockCategory)
    {
        return view('stock-category.form', [
            'stockCategory' => $stockCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StockCategory  $stockCategory
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStockCategory $request, StockCategory $stockCategory)
    {
        $stockCategory->update($request->all());
        return redirect(route('stock-categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StockCategory  $stockCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockCategory $stockCategory)
    {
        $stockCategory->delete();
        return redirect(route('stock-categories.index'));
    }
}
