<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rate;

class RatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rates = Rate::get();
        return view('rates.index', compact('rates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ToDo: Validations
        $rate = Rate::create($request->all());
        return redirect(route('rates.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function show(Rate $rate)
    {
        return view('rates.show', compact('rate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function edit(Rate $rate)
    {
        return view('rates.update', compact('rate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rate $rate)
    {
        //ToDo: validate (ex. $request->validate())
        $rate->update($request->all());

        return redirect(route('rates.show', $rate));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rate $rate)
    {
        try
        {
            $rate->delete();
        }
        catch (\Exception $e)
        {
        }
        finally {
            return redirect(route('rates.index'));
        }

    }

    /**
     * Delete the resource
     *
     * @param  Rate  $rate
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function delete(Rate $rate)
    {
        return view('rates.delete', compact('rate'));
    }
}
