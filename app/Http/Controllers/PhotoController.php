<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class PhotoController extends Controller
{
    

    public function create($gallery_id){

        if(Auth::check()){
            return \Redirect::route('gallery.index');

        }

    	return view('photo/create',compact('gallery_id'));
    }

    public function store(Request $request){


    	$gallery_id=$request->input('gallery_id');
    	 $title= $request->input('title');
        $description= $request->input('description');
        $location= $request->input('location');
        $image = $request->file('image');
        $owner_id= 1;

        //upload check

        if($image){
            $image_filename = $image->getClientOriginalName();
            $image->move(public_path('images'),$image_filename);   }
else{
    $image_filename= 'noimage.jpg';
}

DB::table('photos')->insert(
[

    'title'=>$title,
    'description' => $description,
    'location' => $location,
    'gallery_id' => $gallery_id,
    'image'=> $image_filename,
    'owner_id' => $owner_id


]


);
//set message

\Session::flash('message','Photo Added');


//redirect

return \Redirect::route('gallery.show',array('id'=>$gallery_id));



    }
    public function details($id){
    	//get that photo

        $photo= DB::table('photos')->where('id',$id)->first();
        //render template

        return view('photo/details',compact('photo'));
    }
}
