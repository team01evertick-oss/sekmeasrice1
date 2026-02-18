<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function addNews(){
        return view("backend.news.add-news");
    }
    public function viewNews(){
        $row = DB::table("news")->get();
        return view("backend.news.view-news", ["row"=> $row]);
    }
    public function submitToAddNews(Request $request){
        $request->validate([
            'title'        => 'required|string|max:255',
            'description'  => 'required|string|max:5000',
            'image_news'  => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:20480',
        ]);

         // Handle file upload image
        $image_news = $request->file('image_news');
        $path = 'storage/local_product';
        $image = time() . '-' . $image_news->getClientOriginalName();
        $image_news->move(public_path($path), $image);


        // Insert into database
        $result = DB::table('news')->insert([
            'title'     => $request->title,
            'description'        => $request->description,
            'image_news' => $image,
        ]);

        if ($result) {
            return redirect()->route('view.news')->with('success', 'created successfully!');
        } else {
            return back()->with('error', 'Something went wrong, try again.');
        }
    }
    public function editNews($id){
        $row = DB::table('news')->where('id',$id)->first();
        return view('backend.news.edite-news', ['row'=> $row]);
    }
  public function submitToEditNews(Request $request)
{
    $request->validate([
        'update_id'              => 'required|numeric|min:1',
        'update_title'           => 'required|string|max:255',
        'update_description'     => 'required|string|max:5000',
        'update_title_km'        => 'required|string|max:255',
        'update_description_km'  => 'required|string|max:5000',
        'update_image_news.*'    => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:20480',
    ]);

    $update_id = $request->update_id;

    $news = DB::table('news')->where('id', $update_id)->first();

    // Safe decode
    $oldImages = json_decode($news->image_news ?? '[]', true);
    if (!is_array($oldImages)) {
        $oldImages = [];
    }

    $newImages = [];

    if ($request->hasFile('update_image_news')) {

        foreach ($request->file('update_image_news') as $file) {

            $imageName = time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/news'), $imageName);

            $newImages[] = $imageName;
        }
    }

    $finalImages = array_merge($oldImages, $newImages);

    DB::table('news')->where('id', $update_id)->update([
        'title'          => $request->update_title,
        'description'    => $request->update_description,
        'title_km'       => $request->update_title_km,
        'description_km' => $request->update_description_km,
        'image_news'     => json_encode($finalImages),
        'updated_at'     => now(),
    ]);

    return redirect()->route('view.news')
        ->with('success', 'News updated successfully!');
}


    public function submitToRemoveNews(Request $request){
          $remove_id = $request->input('remove_id');

        $result = DB::table('news')->where('id', $remove_id)->delete();

        if($result){
            return redirect()->route('view.news')->with('success','delated success');
        }
    }
}
