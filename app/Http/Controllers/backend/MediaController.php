<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class MediaController extends Controller
{
    public function addMedia(){
        return view("backend.media.add-media");
    }
    public function viewMedia(){
        $row = DB::table("media")->get();
        return view("backend.media.view-media", ["row"=> $row]);
    }
    public function submitToAddMedia(Request $request){
        $request->validate([
            'title'        => 'required|string|max:255',
            'description'  => 'required|string|max:5000',
            'title_km'        => 'nullable|string|max:255',
            'description_km'  => 'nullable|string|max:5000',
            'image_media'  => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:20480',
            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:10240',
        ]);

         // Handle file upload image
        $image_media = $request->file('image_media');
        $path = 'storage/local_product';
        $image = time() . '-' . $image_media->getClientOriginalName();
        $image_media->move(public_path($path), $image);

        $images = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $name = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
                $file->move(public_path('assets/image_details'), $name);
                $images[] = 'assets/image_details/'.$name;
            }
        }
        
        // Insert into database
        $result = DB::table('media')->insert([
            'title'     => $request->title,
            'description'    => $request->description,
            'title_km'     => $request->title_km,
            'description_km'    => $request->description_km,
            'image_media' => $image,
            'images' => json_encode($images)
        ]);

        if ($result) {
            return redirect()->route('view.media')->with('success', 'created successfully!');
        } else {
            return back()->with('error', 'Something went wrong, try again.');
        }
    }
    public function editMedia($id){
        $row = DB::table('media')->where('id',$id)->first();
        return view('backend.media.update-media', ['row'=> $row]);
    }
     public function submitToEditMedia(Request $request){
        $request->validate([
        'update_id'          => 'required|numeric|min:1',
        'update_title'       => 'required|string|max:255',
        'update_description' => 'required|string|max:5000',
        'update_title_km'       => 'nullable|string|max:255',
        'update_description_km' => 'nullable|string|max:5000',
        'update_image_media' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:20480',
        'old_image_media'    => 'nullable|string|max:255',
        'edit_images.*' => 'image|mimes:jpg,jpeg,png,webp|max:10240',
        ]);

        $update_id = $request->input('update_id');

        $update_image_media = $request-> file('update_image_media');
        $old_image_media = $request-> input('old_image_media');
        $path = 'storage/local_product';
        if($update_image_media){
            $image = time().'-'.$update_image_media->getClientOriginalName();
            $update_image_media -> move($path, $image);
        }elseif($old_image_media){
            $image = $old_image_media;
        }

        // Get the list of old images that the user wants to keep
        $keepImages = $request->input('keep_old_images', []); // array of paths

        // Delete removed old images from storage
        $oldImages = $customer->images ?? [];
        foreach ($oldImages as $oldImage) {
            if (! in_array($oldImage, $keepImages) && File::exists(public_path($oldImage))) {
                File::delete(public_path($oldImage));
            }
        }

        $newImages = $keepImages; // start with kept old images

        // Add newly uploaded images
        if ($request->hasFile('edit_images')) {
            foreach ($request->file('edit_images') as $file) {
                $name = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
                $file->move(public_path('assets/image_details'), $name);
                $newImages[] = 'assets/image_details/'.$name;
            }
        }


        // Update database
        $result = DB::table('media')->where('id', $update_id)->update([
            'title'        => $request->update_title,
            'description'  => $request->update_description,
             'title_km'        => $request->update_title_km,
            'description_km'  => $request->update_description_km,
            'image_media'  => $image,
            'images' => json_encode($newImages),
            'updated_at'   => now(),
        ]);

        if ($result) {
            return redirect()->route('view.media')->with('success', 'Media updated successfully!');
        } else {
            return back()->with('error', 'No changes were made.');
        }
    }
    public function submitToRemoveMedia(Request $request){
          $remove_id = $request->input('remove_id');

        $result = DB::table('media')->where('id', $remove_id)->delete();

        if($result){
            return redirect()->route('view.media')->with('success','delated success');
        }
    }
}
