<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\Cars;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CollectionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listcollection = Collection::all();
        return view('collection', [
            "title" => "Collection"
        ], compact('listcollection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('collection_create', [
            'title' => 'Collection'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'collection_name' => 'required',
        //     'cars' => 'required',
        //     'company' => 'required',
        //     'image' => 'required'
        // ]);

        $image = $request->file('image_path');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $image->move($destinationPath, $filename);
        $image_path = '/img/' . $filename;

        Collection::create([
            //'collection_id' => $request->collection_id,
            'collection_name' => $request->collection_name,
            'cars' => $request->cars,
            'company' => $request->company,
            'image_path' => $image_path,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        return redirect(route('collection.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $title = 'Collection';
        $pagetitle = 'Collection Details';

        $listcollection = Collection::where('collection_name', $name)
            ->orderBy('collection_name')
            ->get();

            return view('collection_show', compact('title', 'pagetitle', 'listcollection'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        $title = 'Collection';
        $pagetitle = 'Collections';

        //$listcollection = Collection::query()->findOrFail($name);
        $listcollection = Collection::where('collection_name', '=', $name)->firstOrFail();

        return view('collection_edit', compact('title', 'pagetitle', 'listcollection'));
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
        $this->validate($request, [
            'collection_name' => 'required',
            'cars' => 'required',
            'company' => 'required'
        ]);

        $listcollection = Collection::query()->findOrFail($id);

        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $image->move($destinationPath, $filename);
            $image_path = '/img/' . $filename;

            File::delete(public_path($listcollection->image_path));

            $listcollection->update([
                'collection_name' => $request->collection_name,
                'cars' => $request->cars,
                'company' => $request->company,
                'image_path' => $image_path
            ]);
        } else {
            $listcollection->update([
                'collection_name' => $request->collection_name,
                'cars' => $request->cars,
                'company' => $request->company
            ]);
        }

        return redirect(route('collection.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($name)
    {
        $listcollection = Collection::findOrFail($name);
        $listcars = Cars::all();

        //Delete gambar collection
        foreach ($listcars as $item){
            if ($item['collection_from'] == $listcollection['collection_name']){
                File::delete(public_path($listcollection->image_path));
            }
        }

        //Delete gambar car
        File::delete(public_path($listcollection->image_path));
        $listcollection->delete();
        return redirect(route('collection.index'));
    }
}


