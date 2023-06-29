<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class RevenueController extends Controller
{
    
    public function index()
	{
        $transaksi = Transaction::simplePaginate(10);

		return view('transaction.revenue', ['transaction' => $transaksi]);
	}

    public function search(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Ambil data berdasarkan rentang tanggal
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $data = Transaction::whereDate('tgl_masuk', '>=', $start_date)
							->whereDate('tgl_masuk', '<=', $end_date)
							->simplePaginate(10);

        return view('transaction.revenue', ['transaction' => $data]);
    }
}
