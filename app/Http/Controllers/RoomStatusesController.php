<?php

namespace App\Http\Controllers;

use App\RoomStatus;
use Illuminate\Http\Request;

class RoomStatusesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roomStatuses = RoomStatus::get();
        return view('room_statuses.index', compact('roomStatuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('room_statuses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ToDo: Validations
        $roomStatus = RoomStatus::create($request->all());
        return view('room_statuses.show', compact($roomStatus));
    }

    /**
     * Display the specified resource.
     *
     * @param  RoomStatus  $roomStatus
     * @return \Illuminate\Http\Response
     */
    public function show(RoomStatus $roomStatus)
    {
        //
        return view('room_statuses.show', compact('roomStatus'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  RoomStatus  $roomStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomStatus $roomStatus)
    {
        return view('room_statuses.update', compact('roomStatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  roomStatus  $roomStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomStatus $roomStatus)
    {
        //ToDo: Validate
        $roomStatus->update($request->all());
        return redirect(route('roomStatuses.show', $roomStatus));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Roomstatus  $roomStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomStatus $roomStatus)
    {
        //
    }
}
