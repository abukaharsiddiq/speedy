<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticeModel;
use Validator;

class noticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = new noticeModel();
        $select = noticeModel::orderBy('id','ASC')->paginate(5);
        return view('admin.add_notice',['notice'=>$select]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $db = new noticeModel();

        $valid = Validator::make($request->all(),['noticeTitle'=>'required','description'=>'required']);
        if($valid->fails()){
            return redirect()->back()->withErrors($valid)->withInput();
        }

        $title = $request->input('noticeTitle');
        $description = $request->input('description');
    
        $db->title=$title;
        $db->description=$description;
        $db->save();

        return redirect()->back()->with('success',' Successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = noticeModel::find($id);
        $db->delete();
        return redirect()->back()->with('success','Notice Delete !');
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $db = noticeModel::find($id);
        // return view('admin.noticeEdit',['view'=>$db]);
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
        //
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
}
