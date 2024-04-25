<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManager;
use Illuminate\Http\Request;
use App\Models\galeryimage;
use Illuminate\Support\Facades\Auth;
class ImageController extends Controller
{
    public function storeImage(Request $request)
    {
        $request->validate([
            'caption'=>'required|max:255',
            'category'=>'required',
            'image'=>'required|image|mimes:png,jpg,jpeg,bmp'
        ],[
            'category.required'=>'Please select a category'
        ]);
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image_name=rand(1000,9999).time().'.'.$file->getClientOriginalExtension();
            $thumbPath=public_path('user_images/thumb');
            

            $file->move(public_path('user_images'),$image_name);


        }
    

        galeryimage::create([
            'user_id'=>0,   
            'caption'=>$request->caption,
            'category'=>$request->category,
            'image'=>$image_name,
        ]);
        
        return redirect()->route('welcome')->with('success', 'Image Successfully Uploaded.');
    }

    public function welcome() {
        $data = galeryimage::all();

        return view('welcome', compact('data'));
    }

    public function detailImage(galeryimage $image){
        return view("detail", compact("image"));
    }

    //  public function insertData(Request $req, $id)
    // {
    //     $faker = faker::create();
    //     $hasil = Article::find($id);
    //     $user = new Comment();
    //     $user->name = $req->name;
    //     $user->comment = $req->komentar;
    //     $user->id_detail = $req->id;
    //     $user->profile_photo = $faker->imageUrl($width = 50, $height = 50);
    //     $user->save();
    //     return redirect()->action('detailImage')
    // }
}