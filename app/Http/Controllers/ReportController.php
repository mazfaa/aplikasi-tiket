<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Exports\TicketExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $tickets = Ticket::all();
        return view('report', compact('tickets'));
    }

    public function export() 
    {
        return Excel::download(new TicketExport, 'customers-ticket.xlsx');
    }
}
