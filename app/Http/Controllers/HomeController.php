<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function Home() {
        return view('form');
    }

    public function addRecords(Request $request) {
        $data = $request->all();
        DB::table('records')->insert([
            'name' => $data['fname'],
            'surname' => $data['surname'],
            'rollno' => $data['rollno'],
            'username' => $data['username'],
            'email' => $data['email'],
            'mobile_no' => $data['mobile'], 
            'dob' => $data['birthDate'],
            'address' => $data['address'],
            'city' => $data['city'], 
            'state' => $data['state'],
            'country' => $data['country'],
        ]);
        return redirect(url('/student/listRecords'));
    }

    public function listRecords() {
        $list_of_records = DB::table('records')->get();
        return view('records', compact(['list_of_records']));
    }

    public function editRecords($slug) {
        $list_of_records = DB::table('records')->where('id', $slug)->get();
        return view('edit_record', compact(['list_of_records']));
    }

    public function editForm(Request $request, $slug) {
        $data = $request->all();
        DB::table('records')->where('id', '=', $slug)->update([
            'name' => $data['fname'],
            'surname' => $data['surname'],
            'rollno' => $data['rollno'],
            'username' => $data['username'],
            'email' => $data['email'],
            'mobile_no' => $data['mobile'], 
            'dob' => $data['birthDate'],
            'address' => $data['address'],
            'city' => $data['city'], 
            'state' => $data['state'],
            'country' => $data['country'],
        ]);
        return redirect(url('/student/listRecords'));
    }

    public function dropRecords($slug) {
        DB::table('records')->where('id', '=', $slug)->delete();
        $list_of_records = DB::table('records')->get();
        return view('records', compact(['list_of_records']));
    }
}
