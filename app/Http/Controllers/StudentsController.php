<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Models\StudentsPhoto;
use App\Models\StudentsClass;

class StudentsController extends Controller
{
    public function enroll(Request $request, $id)
    {
        $sc = new StudentsClass;
        $sc->student_id = $id;
        $sc->class_id = $request->input('class_id');
        $sc->save();

        return redirect("/admin/students/" . $id . "/classes");
    }
    public function showClasses($id)
    {
        $classes = DB::select("SELECT c.class_id, room, schedule, name FROM students AS s INNER JOIN students_classes AS sc ON s.student_id = sc.student_id INNER JOIN classes AS c ON c.class_id = sc.class_id INNER JOIN subjects AS su ON c.subject_id = su.subject_id WHERE s.student_id = " . $id . " ORDER BY class_id");
        $student = DB::select("SELECT first_name, last_name FROM students WHERE student_id = " . $id);
        $class_list = DB::select("SELECT class_id, name, schedule, room FROM classes AS c INNER JOIN subjects AS s ON c.subject_id = s.subject_id ORDER BY name");
        return view('students_classes', compact('classes', 'student', 'class_list'));
    }
    public function upload(Request $request, $id)
    {
        $sp = new StudentsPhoto;
        $sp->student_id = $id;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('student_images'), $filename);
            $sp->image = $filename;
        }
        $sp->save();
        return redirect("/admin/students");
    }
    public function showUpload($id)
    {
        $student = DB::select("SELECT first_name, last_name FROM students WHERE student_id = " . $id);
        return view('students_upload', compact('student'));
    }

    public function index()
    {
        $students = DB::select("SELECT s.student_id, first_name, last_name, year_level, image FROM students AS s LEFT JOIN students_photos AS sp ON s.student_id = sp.student_id ORDER BY last_name LIMIT 50");
        $student_count = DB::select("SELECT COUNT(student_id) AS student_count FROM students");
        return view('students', compact('students', 'student_count'));
    }
}