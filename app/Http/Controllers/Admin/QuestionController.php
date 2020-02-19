<?php

namespace App\Http\Controllers\Admin;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $questions = Question::where(function ($q) use ($request) {
            if ($request->name) {
                $q->where('ques', 'LIKE', '%' . $request->name . '%')
                    ->orWhere('phone', 'LIKE', '%' . $request->name . '%');
            }
        })->paginate(6);
        return view('admin.questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $question = Question::find($id);
        return view('admin.questions.show', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */



    // show page to reply the question
    public function edit($id)
    {
        $question = Question::find($id);
        return view('admin.questions.answer',compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */


    // to reply the question
    public function update(Request $request, $id)
    {
        //
        $question = Question::find($id);
        $request->validate(['answer' => 'required']);
        $question->update($request->all());
        // send to client as notification
        session()->flash('success', 'Done');
        return redirect()->route('question.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $question = Question::find($id);
        if (!$question) {
            return responseJson(0, 'No data');
        }
        $question->delete();
        return responseJson(1, 'Record deleted successfully!', $id);
    }
}
