<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::latest()->paginate(5);
        // return view('admin.tickets.index');
        if (auth()->user()->is_admin == 1) {
            return view('admin.tickets.index',compact('tickets'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }else{
            return view('user.tickets.index',compact('tickets'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        // return view('admin.tickets.index',compact('tickets'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'message' => 'required',
            'department' => 'required',
            'priority' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
    
        Ticket::create($request->all());
    
        return redirect()->route('user.tickets.index')
                        ->with('success','Ticket created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        return view('tickets.show',compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        return view('tickets.edit',compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'subject' => 'required',
            'message' => 'required',
            'department' => 'required',
            'priority' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
    
        Ticket::create($request->all());
    
        return redirect()->route('tickets.index')
                        ->with('success','Ticket updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket->delete();
    
        return redirect()->route('tickets.index')
                        ->with('success','Ticket deleted successfully');
    }
}
