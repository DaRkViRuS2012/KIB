<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=Slider::slider_index();
        return compact('sliders');
        // return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $en_title=$request['en_title'];
        $ar_title=$request['ar_title'];
        $en_sub_title=$request['en_sub_title'];
        $ar_sub_title=$request['ar_sub_title'];
        $content_type='slider';
        $media_type='image';
        $slider=Slider::slider_create($en_title,$ar_title,$en_sub_title,$ar_sub_title);
                      if($request->file('img_url')!= null){

            $path;
            if(request()->file('img_url')->isValid()){
                $path = $request->file('img_url')->storeAs('public', time().'.jpg');
                $img_name=str_replace('public/', '', $path);
                if(empty($path)){
                    return response()->json([],400);
                }

            }
        Media::media_create($img_name,$media_type,$slider->id,$content_type);
         return redirect('/admin/slider/index');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $id=$request['id'];
        $en_title=$request['en_title'];
        $ar_title=$request['ar_title'];
        $en_sub_title=$request['en_sub_title'];
        $ar_sub_title=$request['ar_sub_title'];
        Slider::slider_update($id,$en_title,$ar_title,$en_sub_title,$ar_sub_title);
        return redirect('/admin/slider/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
  public function delete($id)
    {
        $slider=Slider::slider_show($id);
        foreach ($slider->media as $image) {
        Storage::delete('public'.$image->url);
        }
        Slider::slider_delete($id);
return redirect('/admin/slider/index'); 
    }
}
