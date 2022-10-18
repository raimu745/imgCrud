<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    function index(){
        return view('form');
    }
    function store(Request $request){
    //    dd($request->all());

    $crud = new Crud();
    $crud->name = $request->name;
    $crud->age = $request->age;
    $crud->address = $request->address;

    if($request->hasfile('image')){

        $file = $request->file('image');
        // dd($file);
        $exten = $file->getClientOriginalExtension();
        // dd($exten);
        $filename = time() .'.'.$exten;
        // dd($filename);
        $file->move('image',$filename);
        $crud->image = $filename;


    }
    $crud->save();

    return redirect()->back()->with('msg','Your Record is stored successfully');

    }

    function show(){

        $crud = Crud::all();
        return view('table',compact('crud'));
    }

    function edit($id){
    //   return $id;
      $crud = Crud::find($id);
    //   dd($crud->name);
     return view('edit',compact('crud'));
    }

    function update($id,Request $request){


        $crud = Crud::find($id);

        // $image = null;

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            // dd($file);
            $extenstion = $file->getClientOriginalExtension();
            // dd($extenstion);
            $filename = time().'.'.$extenstion;
            $file->move('image', $filename);
            $image = $filename;
            // dd( $image);
        }
        else
        {
            $image = $crud->image;
        }
        
        $crud->name = $request->name;
        $crud->age = $request->age;
        $crud->address = $request->address;
        $crud->image = $image;
        $crud->update();

        return redirect()->back()->with('msg','Data Updated Successfully');

    }

    function delete($id){
    //    return $id;
      $crud = Crud::find($id);
      $crud->delete();

      return redirect('table')->with('msg','Data Deleted Successfully');
    }
}
