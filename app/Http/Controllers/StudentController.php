<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    protected $student;
    public function index()
    {
       return view('add-student');
    }

    public function addStudent(Request $request)
    {
        $this->student = new Student();
        $this->student->name    = $request->name;
        $this->student->email   = $request->email;
        $this->student->mobile  = $request->mobile;
        $this->student->save();

        return redirect()->back()->with('message','Student info save successfully');

    }


    public function manage()
    {
      $this->student = Student::orderBy('id','desc')->get();

        return view('manage-student',['students'=>$this->student]);
    }

    public function edit($id)
    {
        $this->student = Student::find($id);
        return view('edit-student',['student'=>$this->student]);
    }

    public function update(Request $request,$id)
    {
        $this->student = Student::find($id);
        $this->student->name    = $request->name;
        $this->student->email   = $request->email;
        $this->student->mobile  = $request->mobile;
        $this->student->save();
        return redirect('/manage-student')->with('message','Student info updated  successfully');

    }

    public function destroy($id)
    {

        $this->student = Student::find($id);
        $this->student->delete();
        return redirect('/manage-student')->with('message','Student info Deleted successfully');


    }


}
