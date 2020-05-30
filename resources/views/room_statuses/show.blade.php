@extends('layouts.app')
@section('title')
    RoomStatuses: Read
@endsection
@section('content')
    <div class="container">
        <p>This page will show the details of a selected room status.</p>

        <table class="table table-hover table-bordered">
            <tbody>
            <tr>
                <th class="text-center" scope="col">ID</th>
                <th class="text-center" scope="col">{{$roomStatus->id}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Subject</th>
                <th class="text-center" scope="col">{{$roomStatus->name}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Description</th>
                <th class="text-center" scope="col">{{$roomStatus->description}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Date created</th>
                <th class="text-center" scope="col">{{$roomStatus->created_at}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Date updated</th>
                <th class="text-center" scope="col">{{$roomStatus->updated_at}}</th>
            </tr>
            </tbody>
        </table>




        <div class="d-flex flex-row justify-content-center">
            <a href="{{route('feedbackSubjects.edit', $roomStatus)}}" class="btn btn-outline-warning mr-4">Edit</a>
            <a href="{{route('feedbackSubjects.delete', $roomStatus)}}" class="btn btn-outline-danger mr-4">Delete</a>
        </div>

        <hr>

        <div class="d-flex justify-content-center mt-4">
            <a class="text-info h4" href="{{route('roomStatuses.index')}}">
                Browse room statuses
            </a>
        </div>
    </div>
@endsection
