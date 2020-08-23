<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInvoice;
use App\Invoice;
use App\StockCategory;
use Illuminate\Http\Request;
use LengthException;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('invoice.index', [
            'invoices' => Invoice::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invoice.create', [
            'stock_categories' => StockCategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoice $request)
    {        
        dd(request()->all());
        $invoice = Invoice::create($request->all());

        $count = count($request->description);

        for ($i=0; $i < $count ; $i++) { 
            $invoice->details()->create([
                'description' => $request->description[$i],
                'quantity' => $request->quantity[$i],
                'unit_price' => $request->unit_price[$i],
                'total' => $request->total[$i],
            ]);
        }
        
        return redirect(route('invoices.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        return view('invoice.show', [
            'invoice' => $invoice,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}