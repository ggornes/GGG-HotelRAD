@extends('layouts.app')
@section('title')
    FeedbackSubjects: Add
@endsection
@section('content')
    <div class="container">
        <p>This page will add/create a new room status.</p>

        <form action="{{route('roomStatuses.store')}}" method="POST">
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
                        value="">
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
                        value="">
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
            <a class="text-info h4" href="{{route('roomStatuses.index')}}">
                Browse Room Statuses
            </a>
        </div>
    </div>
@endsection
