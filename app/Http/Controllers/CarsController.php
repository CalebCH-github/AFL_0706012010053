<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use App\Models\Cars;
use Illuminate\Support\Facades\File;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listcars = Cars::all();
        return view('cars', [
            "title" => "Cars"
        ], compact('listcars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listcollection = Collection::all();
        return view('cars_create', [
            'title' => 'Cars'
        ], compact('listcollection'));
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
        //     'car_name' => 'required',
        //     'collection_from' => 'required',
        //     'year' => 'required',
        //     'index' => 'required',
        //     'image' => 'required'
        // ]);

        $image = $request->file('image_path');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $image->move($destinationPath, $filename);
        $image_path = '/img/' . $filename;

        Cars::create([
            'car_name' => $request->car_name,
            'collection_from' => $request->collection_from,
            'year' => $request->year,
            //'index' => $request->index,
            'color' => $request->color,
            'image_path_car' => $image_path,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        return redirect(route('cars.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $title = 'Cars';
        $pagetitle = 'Cars Details';

        $listcars = Cars::where('car_name', $name)
            ->orderBy('car_name')
            ->get();

        return view('cars_show', compact('title', 'pagetitle', 'listcars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        $title = 'Cars';
        $pagetitle = 'Cars';

        // $listcars = Cars::query()->findOrFail($name);
        $listcollection = Collection::all();
        $listcars = Cars::where('car_name', '=', $name)->firstOrFail();

        return view('cars_edit', compact('title', 'pagetitle', 'listcars', 'listcollection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $name)
    {
        // $this->validate($request, [
        //     'car_name' => 'required',
        //     'collection_from' => 'required',
        //     'year' => 'required',
        //     'color' => 'required',
        //     'index' => 'required'
        // ]);

        //$listcars = Cars::query()->findOrFail($name);
        $listcars = Cars::where('car_name', '=', $name)->firstOrFail();

        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $image->move($destinationPath, $filename);
            $image_path = '/img/' . $filename;


            File::delete(public_path($listcars->image_path_car));

            $listcars->update([
                'car_name' => $request->car_name,
                'collection_from' => $request->collection_from,
                'year' => $request->year,
                'color' => $request->color,
                // 'index' => $request->index,
                'image_path_car' => $image_path
            ]);
        } else {
            $listcars->update([
                'car_name' => $request->car_name,
                'collection_from' => $request->collection_from,
                'year' => $request->year,
                'color' => $request->color,
                // 'index' => $request->index,
            ]);
        }

        return redirect(route('cars.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($name)
    {
        $listcars = Cars::findOrFail($name);
        File::delete(public_path($listcars->image_path_car));
        $listcars->delete();
        
        return redirect(route('cars.index'));
    }
}

