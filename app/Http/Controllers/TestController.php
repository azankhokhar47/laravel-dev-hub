<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $test = Test::orderBy('mata_data->name')->get();
      return $test;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $test = new Test;
        // $test->mata_data = [
        //     'name' => 'Azan',
        //     'email' => 'azan@gmail.com',
        //     'mobile_number' => '0000000'
        // ];
        // $test->save();

        // $test = Test::create([
        //     'mata_data' =>[
        //         'name' => 'ali',
        //         'email' => 'ali@gmail.com',
        //         'mobile_number' => '3333333',
        //         'address' => [
        //         'street' => '#123 KK Road',
        //         'city' => 'Islamabad',
        //         'country' => 'Pakistan'
        //         ]
        //     ]
        // ]);

        // $test = Test::find(2);
        // $test->mata_data = collect($test->mata_data)->forget('email');
        // $test->save();

        $test = Test::where('id',2)->update([ 
            'mata_data->email' =>'ahmed@gmail.com'
        ]);
        // $test->mata_data = collect($test->mata_data)->forget('email');
        // $test->save();
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
