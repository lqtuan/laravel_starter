<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateStudentRequest;

class StudentController extends Controller
{
    public function getIndex()
    {
        return view('students.index');
    }

    public function getCreate()
    {
        return view('students.create');
    }

    public function postCreate(CreateStudentRequest $request)
    {
        dd($request);
        die('vao day');
    }
}
