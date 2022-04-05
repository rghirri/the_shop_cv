<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsGrid;

class GridController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ProductsGrid.index')->with('grids', ProductsGrid::all());
    }


    /**
     * view in front homepage
     */
    public function homepage()
    {
        return view('homepage')->with('grids', ProductsGrid::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ProductsGrid.create');
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

       $category = $request->category;

       $image = $request->product_image->store('Grid');

        ProductsGrid::create([

            'category'       =>  $category,
            'image' =>  $image

        ]);

        //dd($slider);

        session()->flash('success', 'Grid Image created successfully.');
        // Redirect user
        return redirect(route('grid.index'));

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
    public function edit(ProductsGrid $grid)
    {
        return view('admin.ProductsGrid.create')->with('grid', $grid);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductsGrid $grid)
    {
        $data = $request->only(['category', 'product_image']);
        
        // Check if new image
        if($request->hasFile('product_image'))
        {

            $data = $request->only(['category', 'product_image']);
            
            // upload it
            $image = $request->product_image->store('Grid');

            // delete old one
            $grid->deleteImage($grid->image);


            $data['image'] = $image;

        }

         // update it
        $grid->update($data);

        // flash messsage
        session()->flash('success', 'Grid updated successfully.');

        //redirect user
        return redirect(route('grid.index'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grid = ProductsGrid::withTrashed()->where('id', $id)->firstOrFail();

        if($grid->trashed())
        {
            $grid->deleteImage($grid->image);
            $grid->forceDelete();
            
        }else
        {
            $grid->delete();
        }

        session()->flash('success', 'Grid deleted successfully.');

        return redirect()->back();

    }


     /**
     * Display a list of all trashed sliders.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        
        return view('admin.ProductsGrid.index')->with('grids', ProductsGrid::onlyTrashed()->get());

    }

    public function restore($id)
    {
         $grid = ProductsGrid::withTrashed()->where('id', $id)->firstOrFail();

        $grid->restore();

         session()->flash('success', 'Grid restored successfully.');

        return redirect()->back();
    }
}