<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\car;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('cars.create ');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        //validation
        $request->validate($this->validationRules());

        // save data
        $car = new Car();
        //$car->car = $data['car'];
        //$car->model = $data['model'];
        //$car->fuel = $data['fuel'];
        //$car->year = $data['year'];
        $car->fill($data);

        $saved = $car->save();
        
        // redirect to show route 
        if($saved) {
            $newCar = Car::find($car->id);
            return redirect()->route('cars.show', $newCar->id);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return  view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return  view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $data = $request->all();

        // validation
        $request->validate($this->validationRules());

        // update data in DB
        $update = $car->update($data);
        //dd($update);

        // redirect
        if($update) {
            return redirect()->route('cars.show', $car->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {   
        // ref entites to eliminate
        $ref = $car->car;
        
        // $ref = $car [
        //     'car', 
        //     'model'
        // ];
        

        //delete
        $deleted = $car->delete();

        // redirect with session data 
        if ($deleted) {
            return redirect()->route('cars.index')->with('deleted', $ref);
        };
    }

    /**
     * Define validation rules
     */
    private function validationRules() 
    {
        return [
            'car' => 'required',
            'model' => 'required',
            'fuel' => 'required',
            'year' => 'required'
        ];
    }
}
