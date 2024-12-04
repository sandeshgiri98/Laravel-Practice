<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function add(Request $request){
        $student= new Student();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->save();


        if($student)
        {
            echo 'new student added';
        }
        else
        {
            echo 'error adding new student';
        }

    }
    function list(){
        $studentData = Student::paginate(5);

        return view('list-student',['students'=>$studentData]);
    }

    function delete($id){
        $isDeleted=Student::destroy($id);

        if($isDeleted)
        {
           return redirect('list');
        }

        else{
            echo 'Error in deleting';
        }
    }

    function edit($id){
        $student=Student::find($id);
        return view('update',['data'=>$student]);
    }

    function editStudent(Request $request, $id){
        $student = Student::find($id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        if($student->save()){
            return redirect('list');
        }
        else{
            return "Error";
        }
    }

    function search(Request $request){
        $search = $request->input('search');
        $studentData = Student::where('name', 'like', "%$request->search%")->get();
        return view('list-student',['students'=>$studentData,'search'=>$request->search]);
    }
    function deleteMultiple(Request $request){
        $result= Student::destroy($request->ids);
        if($result){
            return redirect('list');
        }
        else
        {
            return ('Error while deleting');
        }
    }

    
}
