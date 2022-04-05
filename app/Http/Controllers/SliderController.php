<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\HomeSlider;

class SliderController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.HomeSlider.index')->with('sliders', HomeSlider::all());
    }


    /**
     * view in front homepage
     */
    public function homepage()
    {
        return view('homepage')->with('sliders', HomeSlider::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.HomeSlider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(request()->all());

        // upload the image to storage
       //dd($request->slider->store('HomeSlider'));
       // dd($request->image->store('posts'));

       $title = $request->title;

       $image = $request->slider->store('HomeSlider');

        HomeSlider::create([

            'title'       =>  $title,
            'slider'      =>  $image

        ]);

        //dd($slider);

        session()->flash('success', 'Slider Image created successfully.');
        // Redirect user
        return redirect(route('slider.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeSlider $slider)
    {
        return view('admin.HomeSlider.create')->with('slider', $slider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeSlider $slider)
    {
        $data = $request->only(['title', 'slider']);
        
        // Check if new image
        if($request->hasFile('slider'))
        {

            $data = $request->only(['title', 'slider']);
            
            // upload it
            $image = $request->slider->store('HomeSlider');

            // delete old one
            $slider->deleteImage($slider->slider);


            $data['slider'] = $image;

        }

         // update it
        $slider->update($data);

        // flash messsage
        session()->flash('success', 'Slider updated successfully.');

        //redirect user
        return redirect(route('slider.index'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = HomeSlider::withTrashed()->where('id', $id)->firstOrFail();

        if($slider->trashed())
        {
            $slider->deleteImage($slider->slider);
            $slider->forceDelete();
            
        }else
        {
            $slider->delete();
        }

        session()->flash('success', 'Slider deleted successfully.');

        return redirect()->back();

    }


     /**
     * Display a list of all trashed sliders.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        
        return view('admin.HomeSlider.index')->with('sliders', HomeSlider::onlyTrashed()->get());

    }

    public function restore($id)
    {
         $slider = HomeSlider::withTrashed()->where('id', $id)->firstOrFail();

        $slider->restore();

         session()->flash('success', 'Slider restored successfully.');

        return redirect()->back();
    }

}