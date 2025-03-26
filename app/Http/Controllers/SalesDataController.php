<?php

namespace App\Http\Controllers;

use App\Models\SalesData;
use Illuminate\Http\Request;

class SalesDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salesData = SalesData::all(); // Ambil semua data penjualan
        return view('sales_data.index', compact('salesData')); // Kirim data ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sales_data.create'); // Tampilkan form untuk membuat data baru
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'sales' => 'required|numeric',
        ]);

        SalesData::create($request->all()); // Simpan data baru ke database
        return redirect()->route('sales_data.index')
                         ->with('success', 'Data penjualan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SalesData $salesData)
    {
        return view('sales_data.show', compact('salesData')); // Tampilkan detail data penjualan
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SalesData $salesData)
    {
        return view('sales_data.edit', compact('salesData')); // Tampilkan form untuk mengedit data
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SalesData $salesData)
    {
        $request->validate([
            'date' => 'required|date',
            'sales' => 'required|numeric',
        ]);

        $salesData->update($request->all()); // Update data di database
        return redirect()->route('sales_data.index')
                         ->with('success', 'Data penjualan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SalesData $salesData)
    {
        $salesData->delete(); // Hapus data dari database
        return redirect()->route('sales_data.index')
                         ->with('success', 'Data penjualan berhasil dihapus.');
    }
}