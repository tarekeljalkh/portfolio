<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header = Header::first();
        return view('admin.header.index', compact('header'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required', 'max:200'],
            'sub_title' => ['required', 'max:500'],
            'image' => ['max:3000', 'image'],
        ]);

        $header = Header::first();
        if($request->hasFile('image')){
            //check if previous image exists and delete it
            if($header && File::exists(public_path($header->image))){
                File::delete(public_path($header->image));
            }

            $image = $request->file('image');
            $imageName = rand() . $image->getClientOriginalName();
            $image->move(public_path('/uploads'), $imageName);

            $imagePath = "/uploads/" .$imageName;
        }

        Header::updateOrCreate(
            ['id' => $id],
            [
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'button_text' => $request->button_text,
                'button_url' => $request->button_url,
                'image' => isset($imagePath) ? $imagePath : $header->image, // if imagePath is set, then save imagePath else keep the old one
            ]
        );

        toastr()->success('Updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
