<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Node\Query\OrExpr;

class EmpController extends Controller
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
    public function create(Request $data)
    {
        return view('/admin/employee/addemployee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeemp(Request $request)
    {
        User::create([
            'full_name' => $request['full_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'type' =>$request['type']


        ]);

        return redirect()->route('/admin/employee/allemployee')
            ->with('Email-Address ADDED.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showemployee($id)
    {
        $emp = user::findOrFail($id);
        return view('/admin/employee/showemployee', compact('emp'));
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
    public function updateemp(Request $request, $id)
    {
        $validatedData = $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'type' => 'required',
            'state' => 'required'
        

        ]);
        user::whereId($id)->update($validatedData);


        return redirect()->route('/admin/employee/allemployee')->with('success', 'employee Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyemp($id)
    {
        $emp = user::findOrFail($id);
        $emp->delete();
        return redirect('/admin/employee/allemployee')->with('success', 'employee Data is successfully deleted');
    }

    
    public function allemployee(){
        
        $emps = user::select('*')->where('type','reservation_emp')->orWhere('type','kitchen_emp')->get();
        return view('/admin/employee/allemployee',compact('emps'));
    }

    public function addemployee(){
        return view('/admin/employee/addemployee');
    }

    public function allclient(){
        $clnt = user::select('*')->where('type','client')->get();
        return view('/admin/client/allclient', compact('clnt'));
    }
    
    public function editemployee($id)
    {
        $emp = user::findOrFail($id);
        return view('/admin/employee/editemployee', compact('emp'));
    
    }

    public function showclient($id){

        $client = user::findOrFail($id);
        return view('/admin/client/showclient',compact('client'));
    }
}