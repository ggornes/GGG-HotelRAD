<?php

namespace App\Http\Controllers;

use App\FeedbackSubject;
use Illuminate\Http\Request;

class FeedbackSubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $feedbackSubjects = FeedbackSubject::get();
        return view('feedback_subjects.index', compact('feedbackSubjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('feedback_subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //ToDo: Validations
        $feedbackSubject = FeedbackSubject::create($request->all());

        return view('feedback_subjects.show', compact('feedbackSubject'));
    }

    /**
     * Display the specified resource.
     *
     * @param  FeedbackSubject  $feedbackSubject
     * @return \Illuminate\Http\Response
     */
    public function show(FeedbackSubject $feedbackSubject)
    {
        //
        return view('feedback_subjects.show', compact('feedbackSubject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  FeedbackSubject  $feedbackSubject
     * @return \Illuminate\Http\Response
     */
    public function edit(FeedbackSubject $feedbackSubject)
    {
        //
        return view('feedback_subjects.update', compact('feedbackSubject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  FeedbackSubject  $feedbackSubject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeedbackSubject $feedbackSubject)
    {
        //ToDo: validate (ex. $request->validate())
        $feedbackSubject->update($request->all());

        return redirect(route('feedbackSubjects.show', $feedbackSubject));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  FeedbackSubject  $feedbackSubject
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeedbackSubject $feedbackSubject)
    {
        //
        try
        {
            $feedbackSubject->delete();
        }
        catch (\Exception $e)
        {

        }
        finally
        {
            return redirect(route('feedbackSubjects.index'));
        }

    }


    /**
     * Show Delete view for the resource
     *
     * @param  FeedbackSubject  $feedbackSubject
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function delete(FeedbackSubject $feedbackSubject)
    {
        return view('feedback_subjects.delete', compact('feedbackSubject'));
    }
}
