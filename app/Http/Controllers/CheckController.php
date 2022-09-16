<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function index() {
        $tickets = Ticket::where('status', 'checked')->orderBy('id', 'desc')->get();
        return view('check', compact('tickets'));
    }

    public function store (Request $request) {
        $user = Ticket::whereId($request->id);
        if ($user) {
            Ticket::find($request->id)->update(['status' => 'checked']);
        }

        return redirect('check')->with('status', 'Tiket Valid! Silahkan Masuk dan Selamat Menonton');
    }
}
