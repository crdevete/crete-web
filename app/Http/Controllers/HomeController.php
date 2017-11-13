<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Homepage(){

        return view('home');
    }
    public function learningPaths(){

        return view('learning_paths');

    }

    public function getSurvey(){

        return view('survey');

    }

    public function postSurvey(Request $request){

        $survey  = $request->all();

        Survey::create($survey);

        return redirect()->route('SurveyThankYou');

    }

    public function redirect(){

        return view('survey_thank_you');

    }

    public function HomePageArabic(){

        return view('home_ar');

    }
}
