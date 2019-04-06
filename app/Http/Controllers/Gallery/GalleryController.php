<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries=Gallery::gallery_index();
        return view('admin.gallery.index',compact('galleries'));
    }

        public function index_api()
    {
        $galleries=Gallery::gallery_index();
        foreach ($galleries as $gallery) {
            foreach ($gallery->media as $media1) {
                $media1->url=env('website_link').env('image_storage').$media1->url;
            }
        }
        // return view('admin.gallery.index',compact('galleries'));
         return response()->json(['status' => True, 'data' => $galleries, 'message' => '','type'=>'array']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  public function store(Request $request)
    {   
        $data=$request->all();
        $ar_title=$data['ar_title'];
        $en_title=$data['en_title'];
        $content_type='image';
        $media_type='gallery';
        $gallery=Gallery::gallery_create($en_title,$ar_title);

                    if($request->hasFile('image')){
            foreach($request->file('image') as $file) {                    
            $imagename=$file->getClientOriginalName();
            $path_img=$file->storeAs('public/',time().$imagename);
             $img_name=str_replace('public/', '', $path_img);
             Media::media_create($img_name,$media_type,$gallery->id,$content_type);
            
             }
             return redirect('/admin/gallery/index');
        }
    return Redirect::back()->withErrors('The image input must not be empty');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery=Gallery::gallery_show($id);
        return view('admin.gallery.update',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request['id'];
        $ar_title=$request['ar_title'];
        $en_title=$request['en_title'];
        Gallery::gallery_update($id,$en_title,$ar_title);
        return redirect('/admin/gallery/index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $gallery=Gallery::gallery_show($id);
        foreach ($gallery->media as $image) {
        Storage::delete('public'.$image->url);
        }
        Gallery::gallery_delete($id);
return redirect('/admin/gallery/index'); 
    }
}
