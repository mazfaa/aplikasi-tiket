<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $tickets = Ticket::all();
        return view('admin', compact('tickets'));
    }

    public function edit($id) {
        $fields = Ticket::whereId($id)->get();
        return view('edit', compact('fields'));
    }

    public function update(Request $request, $id) {
        Ticket::find($id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'date' => $request->date,
            'time' => $request->time,
            'seat' => $request->seat,
            'gate' => $request->gate,
            'watching' => $request->watching,
        ]);
        return redirect('admin')->with('success', 'Ticket Updated Successfully!');
    }

    public function destroy($id)
    {
        Ticket::find($id)->delete();
        return redirect('admin')->with('deleted', 'Ticket Deleted Successfully!');
    }
}
