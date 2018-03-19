<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Subjects;
use Response; 
use Validator;
use View;

class SubjectsController extends Controller
{   

    protected $rules =
    [
        'subject' => 'required|min:2|max:32|regex:/^[a-z ,.\'-]+$/i',
        'lec_unit' => 'required|max:1|numeric',
        'lab_unit' => 'max:1|numeric',
        'subject_unit' => 'required|max:1|numeric'
    ];

    public function index()
    {   
        //$subjects = DB::table('subjects')->paginate(5); //paginate in db
        $subjects = Subjects::orderBy('subject')->paginate(5); // paginate in 
        return view('subjects.index', ['subjects' => $subjects]);
    }

    public function store(Request $request)
    {

            $subject = new Subjects();
            $subject->subject = $request->subject;
            $subject->lec_unit = $request->lec_unit;
            $subject->lab_unit = $request->lab_unit;
            $subject->subject_unit = $request->subject_unit;
            $subject->save();
        

        return response()->json($subject);

    }

    public function show($id)
    {
            
        $subject = Subjects::findOrFail($id);

        return view('subjects.show', ['subjects' => $subject]);
    
    }

    public function update(Request $request, $subjectId)
    {
        $subject = DB::table('subjects')
            ->where('subject_id', $subjectId)
            ->update([
                        'subject' => $request->subject, 
                        'lec_unit' => $request->lec_unit, 
                        'lab_unit' => $request->lab_unit,
                        'subject_unit' => $request->subject_unit
                    ]);
        return response()->json($subject);
    }

    public function destroy($subjectId)
    {
        $subject = Subjects::where('subject_id', $subjectId);
        $subject->delete();

        return response()->json($subject);
    }
}
