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

    public function getSurveyArabic(){

        return view('survey_ar');

    }

    public function postSurvey(Request $request){

        $survey  = $request->all();

        Survey::create($survey);

        return redirect()->route('SurveyThankYou');

    }
    public function postSurveyArabic(Request $request){

        $survey  = $request->all();

        Survey::create($survey);

        return redirect()->route('SurveyThankYouArabic');

    }

    public function redirect(){

        return view('survey_thank_you');

    }

    public function redirectArabic(){

        return view('survey_thank_you_ar');

    }


    public function HomePageArabic(){

        return view('home_ar');

    }
}
