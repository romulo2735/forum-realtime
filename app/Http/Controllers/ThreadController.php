<?php

namespace ForumRealtime\Http\Controllers;

<<<<<<< HEAD
use ForumRealtime\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
=======
use Illuminate\Http\Request;
>>>>>>> master

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
<<<<<<< HEAD
     * @return Response
=======
     * @return \Illuminate\Http\Response
>>>>>>> master
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
<<<<<<< HEAD
     * @return Response
=======
     * @return \Illuminate\Http\Response
>>>>>>> master
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
<<<<<<< HEAD
     * @param Request $request
     * @return Response
=======
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
>>>>>>> master
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
<<<<<<< HEAD
     * @param Thread $thread
     * @return Response
     */
    public function show(Thread $thread)
=======
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
>>>>>>> master
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
<<<<<<< HEAD
     * @param Thread $thread
     * @return Response
     */
    public function edit(Thread $thread)
=======
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
>>>>>>> master
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
<<<<<<< HEAD
     * @param Request $request
     * @param Thread $thread
     * @return Response
     */
    public function update(Request $request, Thread $thread)
=======
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
>>>>>>> master
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
<<<<<<< HEAD
     * @param Thread $thread
     * @return Response
     */
    public function destroy(Thread $thread)
=======
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
>>>>>>> master
    {
        //
    }
}
