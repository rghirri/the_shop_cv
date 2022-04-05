<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AdminAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.About.index')->with('abouts', About::all()); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.About.create');
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

        $image = $request->image->store('About');

        // dd($image);

        About::create([

            'image'           => $image,
            'name'            => $request->name,
            'role'            => $request->role,
            'content'         => $request->content,
            'feedback'        => $request->feedback,
            'customerName'    => $request->customer_name,
            'intro'           => $request->intro,
            'skill'           => $request->skill,
            'percent'         => $request->percent,
            'tabOneTitle'     => $request->tab_one,
            'tabOneContent'   => $request->tab_one_content,
            'tabTwoTitle'     => $request->tab_two,
            'tabTwoContent'   => $request->tab_two_content,
            'tabThreeTitle'   => $request->tab_three,
            'tabThreeContent' => $request->tab_three_content

        ]);

        //dd($slider);

        session()->flash('success', 'About Page Created Successfully.');
        // Redirect user
        return redirect(route('adminAbout.index'));
        
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}