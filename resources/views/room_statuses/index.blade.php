@extends('layouts.app')
@section('title')
    RoomStatuses: Browse
@endsection
@section('content')
    <div class="container">
        <p>This page will show all the room statuses.</p>

        <div class="mb-2">
            <a href="{{route('roomStatuses.create')}}" class="btn btn-lg btn-success">Add new room status</a>
        </div>

        <!-- First check room status array -->
        @if (count($roomStatuses) > 0)
            <table class="table table-hover table-borderless table-dark">
                <thead class="thead-dark">
                <tr>
                    <th class="text-center" scope="col">ID</th>
                    <th class="text-center" scope="col">Name</th>
                    <th class="text-center" scope="col">Description</th>
                    <th class="text-center" scope="col">Date created</th>
                    <th class="text-center" scope="col">Date updated</th>
                    <th class="text-center" scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roomStatuses as $rs)
                    <tr>
                        <th class="text-center">{{$rs->id}}</th>
                        <td class="text-center">{{$rs->subject}}</td>
                        <td class="text-center">{{$rs->description}}</td>
                        <td class="text-center">{{$rs->created_at}}</td>
                        <td class="text-center">{{$rs->updated_at ? $rs->updated_at : ''}}</td>
                        <td>
                            <a href="{{route('roomStatuses.show', $rs)}}" class="btn btn-outline-info mr-4">View</a>
                            <a href="{{route('roomStatuses.edit', $rs)}}" class="btn btn-outline-warning mr-4">Edit</a>
                            <a href="{{route('roomStatuses.delete', $rs)}}" class="btn btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif


    <!-- if rates array is empty -->
        @if (count($roomStatuses) <= 0)
            <div class="alert alert-dark text-center" role="alert">
                Sorry, no room statuses available.
            </div>
        @endif



    </div>
@endsection
