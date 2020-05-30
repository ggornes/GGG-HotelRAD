@extends('layouts.app')
@section('title')
    Rates: Browse
@endsection
@section('content')
    <div class="container">
        <p>This page will show all the rates.</p>

        <div class="mb-2">
            <a href="{{route('rates.create')}}" class="btn btn-lg btn-success">Add rate</a>
        </div>

        <!-- First check rates array -->
        @if (count($rates) > 0)
            <table class="table table-hover table-borderless table-dark">
                <thead class="thead-dark">
                <tr>
                    <th class="text-center" scope="col">ID</th>
                    <th class="text-center" scope="col">Rate</th>
                    <th class="text-center" scope="col">Description</th>
                    <th class="text-center" scope="col">Date created</th>
                    <th class="text-center" scope="col">Date updated</th>
                    <th class="text-center" scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rates as $rate)
                    <tr>
                        <th class="text-center">{{$rate->id}}</th>
                        <td class="text-center">&#36; {{$rate->rate}}</td>
                        <td class="text-center">{{$rate->description}}</td>
                        <td class="text-center">{{$rate->created_at}}</td>
                        <td class="text-center">{{$rate->updated_at ? $rate->updated_at : ''}}</td>
                        <td>
                            <a href="{{route('rates.show', $rate)}}" class="btn btn-outline-info mr-4">View</a>
                            <a href="{{route('rates.edit', $rate)}}" class="btn btn-outline-warning mr-4">Edit</a>
                            <a href="{{route('rates.delete', $rate)}}" class="btn btn-outline-danger mr-4">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif

        <!-- if rates array is empty -->
        @if (count($rates) <= 0)
            <div class="alert alert-dark text-center" role="alert">
                Sorry, no rates available.
            </div>
        @endif

    </div>
@endsection
