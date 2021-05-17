<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;   

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('websites.career.index');
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
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'cv_path'=>'required|mimes:pdf',
            'cl_path'=>'required|mimes:pdf',
            'attachment_path'=>'required|mimes:pdf',
            'message'=>'required',
         ]);
           
           $data = array(
               'name' => $request->name,
               'mail' => $request->email,
               'phone' => $request->phone,
               'cv_path' => $request->cv_path,
               'cl_path' => $request->cl_path,
               'attachment_path' => $request->attachment_path,
               'msg' => $request->message,
               
           );
           Mail::send('websites.career.careermail', $data, 
           function($message) use ($data){
               $message -> from($data['mail']);
               $message -> to('ahrotwep@gmail.com');
               $message -> subject('Subject');
               $message -> attach($data['cv_path']->getRealPath(), array(
                   'as' => 'cv_path' . $data['cv_path']->getClientOriginalExtension(),
                   'mime' => $data['cv_path']->getMimeType()
                   ));
               $message -> attach($data['cl_path']->getRealPath(), array(
                   'as' => 'cl_path' . $data['cl_path']->getClientOriginalExtension(),
                   'mime' => $data['cl_path']->getMimeType()
                   ));
               $message -> attach($data['attachment_path']->getRealPath(), array(
                   'as' => 'attachment_path' . $data['attachment_path']->getClientOriginalExtension(),
                   'mime' => $data['attachment_path']->getMimeType()
                   ));
       });
       return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
