@extends('layouts.app')
@section('title')
    Rates: Read
@endsection
@section('content')
    <div class="container">
        <p>This page will show the details of a selected rate.</p>

        <table class="table table-hover table-bordered">
            <tbody>
            <tr>
                <th class="text-center" scope="col">ID</th>
                <th class="text-center" scope="col">{{$rate->id}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Description</th>
                <th class="text-center" scope="col">{{$rate->description}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Rate</th>
                <th class="text-center" scope="col">&#36; {{$rate->rate}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Date created</th>
                <th class="text-center" scope="col">{{$rate->created_at}}</th>
            </tr>
            <tr>
                <th class="text-center" scope="col">Date updated</th>
                <th class="text-center" scope="col">{{$rate->updated_at}}</th>
            </tr>
            </tbody>
        </table>




            <div class="d-flex flex-row justify-content-center">
                <a href="{{route('rates.edit', $rate)}}" class="btn btn-outline-warning mr-4">Edit</a>
                <a href="{{route('rates.delete', $rate)}}" class="btn btn-outline-danger mr-4">Delete</a>
            </div>

            <hr>

            <div class="d-flex justify-content-center mt-4">
                <a class="text-info h4" href="{{route('rates.index')}}">
                    Browse rates
                </a>
            </div>
    </div>
@endsection
