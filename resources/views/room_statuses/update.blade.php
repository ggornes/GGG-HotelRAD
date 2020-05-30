@extends('layouts.app')
@section('title')
    RoomStatuses: Edit
@endsection
@section('content')
    <div class="container">
        <p>This page will edit/update a room status.</p>

        <form action="{{route('roomStatuses.update', $roomStatus)}}" method="POST">
            @method('PUT');
            @csrf

            <div class="form-group row">
                <label for="roomStatusName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input
                        type="text"
                        required="required"
                        class="form-control"
                        id="name"
                        name="name"
                        maxlength="16"
                        placeholder="..."
                        value="{{$roomStatus->name}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="roomStatusDescription" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input
                        required="required"
                        type="text"
                        class="form-control"
                        id="description"
                        name="description"
                        maxlength="255"
                        placeholder="..."
                        value="{{$roomStatus->description}}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>
            </div>
        </form>

        <hr>

        <div class="d-flex justify-content-center mt-4">
            <a class="text-info h4" href="{{route('feedbackSubjects.index')}}">
                Browse feedback
            </a>
        </div>

    </div>
@endsection
