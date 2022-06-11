<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Quiz;
use App\Models\QuizOption;

class QuizController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'quiz_type' => 'required',
            // 'question1' => 'required|integer',
            // 'answer1' => 'required|email',
            // 'question2' => ['required', new PhoneNumber],
            // 'option' => 'required|string',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->withErrors($errors)->withInput();
        }

        $quiz = new Quiz();
        $quiz->title = $request->title;

        if($request->quiz_type == "Q&A") {
            $quiz->question = $request->question1;
            $quiz->hint = $request->hint ?? null;
            $quiz->quiz_type_id = 1;
            $quiz->user_id = 1;
            $quiz->save();

            $option = new QuizOption();
            $option->quiz_id = $quiz->id;
            $option->option = $request->answer1;
            $option->save();
        }
        else {
            $quiz->question = $request->question2;
            $quiz->quiz_type_id = 2;
            $quiz->user_id = 1;
            $quiz->save();

            if($request->option){ 
                foreach ($request->option as $value) {
                    $option = new QuizOption();
                    $option->quiz_id = $quiz->id;
                    $option->option = $value;
                    $option->save();
                }
            }
        }

        $notification = array(
            'message' => "Quiz added successfully",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
