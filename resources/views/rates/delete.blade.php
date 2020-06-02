@extends('layouts.app')
@section('title')
    Rates: Delete
@endsection
@section('content')
    <div class="container">
        <p>This page will delete a rate.</p>


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

        <h5 class="mb-3">Do you want to delete this rate?</h5>

        <form action="{{route('rates.destroy', $rate)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-outline-danger mr-4">Yes</button>
            <a href="{{route('rates.index')}}" class="btn btn-outline-info mr-4">Cancel</a>
        </form>
    </div>
@endsection
