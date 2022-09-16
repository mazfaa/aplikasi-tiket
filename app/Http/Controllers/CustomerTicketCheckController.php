<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class CustomerTicketCheckController extends Controller
{
    public function index () {
        return view('customer-ticket');
    }

    public function store (Request $request) {
        $ticket = Ticket::find($request->id);
        return view('customer-ticket', compact('ticket'));
    }
}
