<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class HomeController extends Controller
{
    public function index() 
    {   
        //all records of table
        $students = Student::all();
        //dd($students);

        // where 
        //$students = Student::where('id', 1)->get();
        //con tre paramentri
        //$students = Student::where('description', '!=', '')->get();
        // opp
        //$students = Student::where('description', '<>', 1)->get();

        //order by 
        //$students = Student::where('description', '<>', 1)
            //->orderBy('name', 'asc')
            //->limit(1) 
            //->get();

        // first
        //$students = Student::where('id', 1)->first();
        //dd($students->name); 

        // find
        //$students = Student::find(2); 
        //dd($students->name); 

        //concatenare find
        //$students = Student::all();
        //$student = $students->find(3);
        //dd($student->name);


        return  view('welcome', compact('students'));
    }
}
