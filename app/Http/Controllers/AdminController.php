<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $reservation = Reservation::query();

        // If a search query is present, filter the results

        $reservation = $reservation->paginate(10);

        return view('reservations.index', compact('reservation'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'number_of_people' => 'required',
            'message' => 'required'
        ]);
    
        Reservation::create($request->all());
    
        return redirect()->route('reservations.index')
            ->with('success','Table Reservation created successfully.');
    }

    /**
     * Display the specified resource.
     */
        public function show(Reservation $reservation)
    {
        return view('reservations.show',compact('reservation'));
    }

    public function edit(Reservation $reservation)
    {
        return view('reservations.edit',compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'number_of_people' => 'required',
            'message' => 'required'
        ]);

        $reservation->update($request->all());

        return redirect()->route('reservations.index')
            ->with('success','Table Reservation updated successfully');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('reservations.index')
            ->with('success','Table Reservation deleted successfully');

    }
}
