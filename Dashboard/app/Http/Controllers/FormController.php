<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('formBuilder');
    }

    public function create()
    {
        return view('pages.lead.create');
    }

    public function update()
    {
        return view('pages.lead.create');
    }

    public function delete()
    {
        return view('pages.lead.create');
    }

}
