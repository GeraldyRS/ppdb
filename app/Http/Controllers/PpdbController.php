<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_siswas;

class PpdbController extends Controller
{
    public function index()
        {
        	$data = \App\Models\data_siswas::get();
        	return view('welcome',['data' => $data]);
        }

     public function formcreate()
        {
        	return view('create');
        }

     public function create(Request $request)
        {
        	$data = data_siswas::create($request->all());
        	 return redirect('/');
        }

     public function formedit($id)
        {
        	$data = \App\Models\data_siswas::find($id);
        	$data->get();
        	return view('edit',['data' => $data]);
        }

     public function edit(Request $request)
        {
        	$data = \App\Models\data_siswas::find($request->id);
        	$data->update($request->all());
        	 return redirect('/');
        }

     public function delete($id)
        {
        	$data = \App\Models\data_siswas::find($id);
        	$data->delete();
        	return redirect()->back();
        }
}
