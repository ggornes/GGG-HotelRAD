@extends('layouts.app')
@section('title')
    Rates: Browse
@endsection
@section('content')
    <div class="container">
        <p>This page will show all the feedback subjects.</p>

        <div class="mb-2">
            <a href="{{route('feedbackSubjects.create')}}" class="btn btn-lg btn-success">Add new feedback</a>
        </div>

        <!-- First check feedback subjects array -->
        @if (count($feedbackSubjects) > 0)
            <table class="table table-hover table-borderless table-dark">
                <thead class="thead-dark">
                <tr>
                    <th class="text-center" scope="col">ID</th>
                    <th class="text-center" scope="col">Subject</th>
                    <th class="text-center" scope="col">Description</th>
                    <th class="text-center" scope="col">Date created</th>
                    <th class="text-center" scope="col">Date updated</th>
                    <th class="text-center" scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($feedbackSubjects as $fs)
                    <tr>
                        <th class="text-center">{{$fs->id}}</th>
                        <td class="text-center">{{$fs->subject}}</td>
                        <td class="text-center">{{$fs->description}}</td>
                        <td class="text-center">{{$fs->created_at}}</td>
                        <td class="text-center">{{$fs->updated_at ? $fs->updated_at : ''}}</td>
                        <td>
                            <a href="{{route('feedbackSubjects.show', $fs)}}" class="btn btn-outline-info mr-4">View</a>
                            <a href="{{route('feedbackSubjects.edit', $fs)}}" class="btn btn-outline-warning mr-4">Edit</a>
                            <a href="{{route('feedbackSubjects.delete', $fs)}}" class="btn btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif


        <!-- if rates array is empty -->
        @if (count($feedbackSubjects) <= 0)
            <div class="alert alert-dark text-center" role="alert">
                Sorry, no feedback available.
            </div>
        @endif



    </div>
@endsection
