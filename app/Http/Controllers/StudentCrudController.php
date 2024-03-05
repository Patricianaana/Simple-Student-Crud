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
        return view('studentList',compact('data'));
        // return view('studentList',['users'=>$data]);
    }

    public function editData($id){
        $data = Student::find($id);
        return view('editStudent',['data'=>$data]);
    }

    public function updateData(Request $req){
        $data = Student::find($req->id);
        $data->name=$req->name;
        $data->age=$req->age;
        $data->email=$req->email;
        $data->contact=$req->contact;
        $data->address=$req->address;
        $data->department=$req->department;
        $data->program=$req->program;
        $data->save();
        return redirect('/');
    }

    public function deleteData($id){
        $data = Student::find($id);
        $data->delete();
        return redirect('/');
    }

    public function searchData(Request $req)
    {
        $search = $req->input('search');
        $data = Student::where('name','like','%'.$search.'%')
                       ->orWhere('age','like','%'.$search.'%')
                       ->orWhere('email','like','%'.$search.'%')
                       ->orWhere('contact','like','%'.$search.'%')
                       ->orWhere('address','like','%'.$search.'%')
                       ->orWhere('department','like','%'.$search.'%')
                       ->orWhere('program','like','%'.$search.'%')
                       ->get();
        return view('studentList',compact('data','search'));
    }
}
