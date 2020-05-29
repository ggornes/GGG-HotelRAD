@extends('layouts.app')
@section('title')
    Rates: Edit
@endsection
@section('content')
    <div class="container">
        <p>This page will edit/update a rate.</p>

        <form action="{{route('rates.update', $rate)}}" method="POST">
            @method('PUT')
            @csrf

            <div class="form-group row">
                <label for="rate" class="col-sm-2 col-form-label">Rate</label>
                <div class="col-sm-10">
                    <input
                        type="number"
                        required="required"
                        class="form-control"
                        id="rate"
                        name="rate"
                        placeholder="0.00"
                        min="0.00"
                        max="99999.99"
                        step="0.01"
                        value="{{$rate->rate}}">
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
                        value="{{$rate->description}}">
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
            <a class="text-info h4" href="{{route('rates.index')}}">
                Browse rates
            </a>
        </div>

    </div>
@endsection
