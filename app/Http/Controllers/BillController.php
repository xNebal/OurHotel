<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;
use App\Models\Bill;
use App\Models\Room;
use App\Models\reservation;

class BillController extends Controller
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
    
    public function addBill($res_id)
    {
        $res = reservation::findOrFail($res_id);
        $price = room::select('price')->where('id','=', $res->room_id)->sum('price');
        $fdate = $res->from;
        $tdate = $res->to;
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        $total = $price * $days;
        return view('/reservation_emp/bills/addbill', compact('res','total'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storebill(Request $request)
    {
        $bill = bill::create([
            'res_id' => $request['res_id'],
            'state' => $request['state'],
            'payment_type' => $request['payment_type'],
            'total' => $request['total'] ,
        ]);

        return view('/reservation_emp/bills/bill' , compact('bill'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function bill()
    {
        return view('/reservation_emp/bills/bill');
    }

    public function showbill($bill_id)
    {
        $bill = DB::table('bills')->where('bill_id', $bill_id);
        return view('/reservation_emp/bills/bill' , compact('bill'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editbill($id)
    {
        $bill = DB::table('bills')->where('bill_id', $id);
        return view('/reservation_emp/bills/editbill' , compact('bill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatebill(Request $request, $id)
    {
        
        $validatedData = $request->validate([
            'state' => 'required',
        ]);
        bill::whereId($id)->update($validatedData);
        return redirect()->route('/reservation_emp/bills/allbill')->with('success', 'bill Data is successfully updated');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function allbill()
    {
        $bills = Bill::all();
        return view('/reservation_emp/bills/allbill',compact('bills'));
    }
}