<?php

namespace App\Http\Controllers;

use App\Submission;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function index()
    {
        return view('form');
    }

    public function create()
    {
        //
    }

    public function store(Request$request)
    {
        $submission  = $request->all();

        Submission::create($submission);

        return redirect()->route('FormThankYou');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function redirect(){

        return view('form_thank_you');

    }
    public function getFormArabic()
    {
        return view('form_ar');

    }

    public function postFormArabic(Request $request)
    {

        $submission = $request->all();

        Submission::create($submission);

        return redirect()->route('FormThankYouArabic');
    }

    public function thankYouRedirectArabic()
    {

        return view('form_thank_you_ar');

    }




}

