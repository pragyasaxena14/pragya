<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\addField;
class EdudetailsController extends Controller
{
    public function index()
    {
        return view('editField');
    }

    public function show(Request $request)
    {
        $addField= new addField([
            'firstname'=> $request->get('firstname'),
            'lastname'=> $request->get('lastname'),
            'age'=> $request->get('age'),
            '10thpercent'=> $request->get('10thpercent'),
            '12thpercent'=> $request->get('12thpercent'),
            'highest_qualification'=> $request->get('highest_qualification'),
        ]);
        $addField->save();
    }
}
