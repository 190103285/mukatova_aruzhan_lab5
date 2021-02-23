<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_name($id){
        return view('nameView', ['name1' => 'Dana',
        'name2' => 'Dina', 'name3' => 'Aruzhan']);
    }

    public function get_date($id){
        return view('birthView'->with('id', $date));
    }

    public function get_age($id){
        static $studentAge = array(0=>"18", 1=> "19", 2=> "19");
        $age = $studentAge[$id];
        return view('ageView', compact('age'));
    }

    public static function show($id) {
        
        get_name($id);
        get_date($id);
        get_age($id);
    }
}
