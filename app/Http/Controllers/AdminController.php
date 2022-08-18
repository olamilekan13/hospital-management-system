<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_doctor');
    }


    public function upload(Request $request) {

        $doctor = new doctor;
        $image = $request->file;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imageName);
        $doctor->image= $imageName;

        $doctor->name= $request->name;
        $doctor->phone= $request->number;
        $doctor->speciality= $request->speciality;
        $doctor->room= $request->room;
        $doctor->save();

    }


}
