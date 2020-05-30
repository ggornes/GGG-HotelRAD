@extends('layouts.app')
@section('title')
    FeedbackSubjects: Delete
@endsection
@section('content')
    <div class="container">
        <p>This page will delete a feedback.</p>


        <table class="table table-hover table-bordered">
            <tbody>
            <tr>
                <th class="text-center" scope="col">ID</th>
                <th class="text-center" scope="col">{{$feedbackSubject->id}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Subject</th>
                <th class="text-center" scope="col">{{$feedbackSubject->subject}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Description</th>
                <th class="text-center" scope="col">{{$feedbackSubject->description}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Date created</th>
                <th class="text-center" scope="col">{{$feedbackSubject->created_at}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Date updated</th>
                <th class="text-center" scope="col">{{$feedbackSubject->updated_at}}</th>
            </tr>
            </tbody>
        </table>

        <h5 class="mb-3">Do you want to delete the rate?</h5>

        <form action="{{route('feedbackSubjects.destroy', $feedbackSubject)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-outline-danger mr-4">Yes</button>
            <a href="{{route('feedbackSubjects.index')}}" class="btn btn-outline-info mr-4">Cancel</a>
        </form>
    </div>
@endsection
