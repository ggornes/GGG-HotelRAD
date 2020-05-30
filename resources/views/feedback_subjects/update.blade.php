@extends('layouts.app')
@section('title')
    FeedbackSubjects: Edit
@endsection
@section('content')
    <div class="container">
        <p>This page will edit/update a feedback.</p>

        <form action="{{route('feedbackSubjects.update', $feedbackSubject)}}" method="POST">
            @method('PUT')
            @csrf

            <div class="form-group row">
                <label for="feedbackSubject" class="col-sm-2 col-form-label">Subject</label>
                <div class="col-sm-10">
                    <input
                        type="text"
                        required="required"
                        class="form-control"
                        id="subject"
                        name="subject"
                        maxlength="24"
                        value="{{$feedbackSubject->subject}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input
                        required="required"
                        type="text"
                        class="form-control"
                        id="description"
                        name="description"
                        maxlength="48"
                        value="{{$feedbackSubject->description}}">
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
