<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PortfolioDataTable;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PortfolioDataTable $dataTable)
    {
        return $dataTable->render('admin.portfolio.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.portfolio.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:5000'],
            'title' => ['required', 'max:200'],
            'category_id' => ['required','numeric'],
            'description' => ['required'],
            'client' => ['max:200'],
            'website' => ['url'],
        ]);

        $imagePath = handleUpload('image');

        $portfolio = new Portfolio();
        $portfolio->title = $request->title;
        $portfolio->image = $imagePath;
        $portfolio->category_id = $request->category_id;
        $portfolio->description = $request->description;
        $portfolio->client = $request->client;
        $portfolio->website = $request->website;
        $portfolio->save();

        toastr()->success('Portfolio Created Successfully');
        return to_route('admin.portfolio.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
