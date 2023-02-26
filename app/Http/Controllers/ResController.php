<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\DB;

class ResController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/reservation_emp/bills/addbill');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeres(Request $request)
    {
        $res = reservation::create([
            'room_id' => $request['room_id'],
            'from' => $request['from'],
            'to' => $request['to'],
            'state' => $request['state'],
            'reservationist' => $request['reservationist'],
        ]);
        
        return view('/reservation_emp/reservation/showres', compact('res'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showres($res_id)
    {
        $res = reservation::findOrFail($res_id);
        return view('/reservation_emp/reservation/showres', compact('res'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($res_id)
    {
        $res = reservation::findOrFail($res_id);
        $rooms = Room::select('*')->where('state','available')->get();
        return view('reservation_emp.reservation.edit', compact('res','rooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateres(Request $request, $res_id)
    {
        $validatedData = $request->validate([
            'state' => 'required',
        ]);

        reservation::where('res_id' , '=' , $res_id)->update($validatedData);
        $res = reservation::findOrFail($res_id);
        return view('/reservation_emp/reservation/showres', compact('res'));
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($res_id)
    {
        $res = reservation::findOrFail($res_id);
        $res->delete();
        return redirect('reservation_emp/reservation/all')->with('success', 'Res Data is successfully deleted');
    
    }

    public function add()
    {
        return view('/reservation_emp/reservation/add');
    }

    public function addRR(Request $request)
    {
        $from = $request->input('from');
        $to = $request->input('to');
        $rooms = Room::whereNotIn('id', function($query) use ($from, $to) {
            $query->from('reservations')
             ->select('room_id')
             ->where('state', 'Confirmed')
             ->where('from', '<=', $to)
             ->where('to', '>=', $from);
         })->get();
        return view('/reservation_emp/reservation/addRR' , compact('rooms') , compact('from','to'));
    }

    public function all()
    {
         
        $ress = reservation::all();
        return view('reservation_emp.reservation.all', compact('ress'));
    }

}