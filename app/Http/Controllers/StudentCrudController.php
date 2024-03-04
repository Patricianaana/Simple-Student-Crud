<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentCrudController extends Controller
{
    //for create
    public function addStudent(Request $req){
        $user = new Student;
        $user->name=$req->name;
        $user->age=$req->age;
        $user->email=$req->email;
        $user->address=$req->address;
        $user->contact=$req->contact;
        $user->department=$req->department;
        $user->program=$req->program;
        $user->save();
        //redirect user to index to view student list
        return redirect('/');
    }

    //for read
    public function viewStudent(){
        $data = Student::all();
        return view('studentList',['users'=>$data]);
    }
}
