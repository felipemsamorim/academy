<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::where('ativo', 1)
        ->orderBy('nome', 'desc')
        ->get();
        return $students;
    }
 
    public function show($id)
    {
        $student = Student::find($id);
        if(!$student)
        return Student::where('cpf',$id)->get();
        return Student::find($id);
    }

    public function store(Request $request)
    {
        return Student::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());

        return $student;
    }

    public function delete(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return 204;
    }
}
