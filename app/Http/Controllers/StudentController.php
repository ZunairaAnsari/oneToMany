<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // through this you can access all the records
        $students = student::with("contact_connection")->get();
        return $students;

        // with conditions you can access
        // $students = student::with("contact_connection")
        // ->where('city', 'Lahore')
        // ->get();
        // return $students;
        
        // through this you can access the required records
        /*$students = student::with("contact_connection")->find(2);
        echo "<h1> $students->name </h1>" . "<br/>";
        echo $students->contact_connection->phone . "<br/>";*/

        // with has method you can access records which has specific relationship
        /*$students = student::where('city', 'Karachi')
        ->withWhereHas("contact_connection", function($query){
            $query->where('phone', '12345');
        })->get();
        return $students;*/
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        //
    }
}
