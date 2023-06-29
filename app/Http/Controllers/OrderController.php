<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
	{
		$transaksi = Transaction::get();

		return view('transaction.order', ['transaction' => $transaksi]);
	}

	public function simpan(Request $request)
	{
		$request->validate([
			'nama' => 'required|max:30',
			'no_telpon' => 'required',
			'kecepatan' => 'required',
			'berat' => 'required|numeric',
			'tarif' => 'required|numeric',
			'tgl_masuk' => 'required',
			'tgl_keluar' => 'required',
		]);

		/* $validateData = $request->validate ([
			'nama' => 'required|max:30',
			'no_telpon' => 'required',
			'kecepatan' => 'required',
			'berat' => 'required|integer',
			'tarif' => 'required',
			'tgl_masuk' => 'required',
			'tgl_keluar' => 'required',
		]); */
		
		Transaction::create($request->all());

		return redirect('/transaksi')->with('Success', 'Transaksi Berhasil');
	}
}
