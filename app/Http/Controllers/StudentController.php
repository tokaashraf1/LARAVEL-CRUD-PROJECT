<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   protected $student;
   public function __construct()
   {
    $this->student= new Student();
   }
    public function index()
    {
     return $this->student->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->student->create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $student= $this->student->find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student= $this->student->find($id);
        $student->update($request->all());
        return $student;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student= $this->student->find($id);
        return $student->delete();
    }
}
