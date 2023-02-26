<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRoomRequest;
use Illuminate\Http\Request;
use App\Models\history;

use App\Models\Room;

class RoomController extends Controller
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

        return view('room.addroom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeroom(Request $request)
    {
        Room::create([
            'price' => $request['price'],
            'type' => $request['type'],
            'description' => $request['description'],
            'bed_number' => $request['bed_number'],
            'state' => $request['state'],
            'img' => $request['img'],

        ]);
        history::create(['msg'=>"{{ Auth::user()->email }} .has made a room",'type'=>'makeroom']);

        return redirect()->route('/admin/Room/allroom');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(room $room)
    {
        return view('/admin/Room/allroom', ['room' => $room]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'price' => 'required',
            'type' => 'required',
            'description' => 'required',
            'bed_number' => 'required',
            'state' => 'required'

        ]);
        room::whereId($id)->update($validatedData);
        history::create(['msg'=>"{{ Auth::user()->email }} .has edited a room",'type'=>'editroom']);


        return redirect()->route('/admin/Room/allroom')->with('success', 'room Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        history::create(['msg'=>"{{ Auth::user()->email }} .has deleted a room",'type'=>'deleteroom']);

        return redirect('/admin/Room/allroom')->with('success', 'room Data is successfully deleted');
    }

    
    public function allroom()
    {
        $rooms = Room::all();
        return view('/admin/Room/allroom', compact('rooms'));
        //dd('ok');
    }
    public function allroomsview()
    {
        $rooms = Room::all();
        return view('rooms', compact('rooms'));
        //dd('ok');
    }
    // add room
    public function addroom()
    {
        return view('/admin/Room/addroom');
    }

    //edit room
    public function editroom($id)
    {
        $room = Room::findOrFail($id);
        //return view('/admin/Room/editroom', ['room'=>$room]);
        return view('/admin/Room/editroom', compact('room'));
        //return view ('/admin/Room/editroom',['room'=>$room]);

    }

    //delete room
    public function deleteroom(room $room)
    {
        $room = Room::findOrFail($room->id);
        return view('/admin/Room/deleteroom', ['room' => $room]);
    }
}
