<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Philosopher;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PhilosopherController extends Controller
{

    use ApiResponse;

    /**
     * Display a listing of the resource.
     * 
     * @group Philosophers
     * 
     * @response 200 scenario="Success" {
     *   "success": true,
     *   "data": [
     *     {
     *       "id": 1,
     *       "name": "Acrion",
     *       "life": "5th/4th century BC",
     *       "school": "Pythagorean",
     *       "notes": "visited by Plato",
     *     }
     *   ]
     * }
     * 
     */
    public function index()
    {
        return $this->success(Philosopher::all());
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @group Philosophers
     * 
     * @response 200 scenario="Success" {
     *   "success": true,
     *   "message": "Record stored successfully"
     *   "data": [
     *     {
     *       "id": 1,
     *       "name": "Acrion",
     *       "life": "5th/4th century BC",
     *       "school": "Pythagorean",
     *       "notes": "visited by Plato",
     *     }
     *   ]
     * }
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "string|max:255",
            "life" => "string|max:255",
            "school" => "string|max:255",
            "notes" => "string",
        ]);

        try {
            $philosopher = Philosopher::create($validated);
    
            return $this->success($philosopher, "Record stored successfully");
        } catch (Exception $e) {
            return $this->error(message: $e);
        }


    }

    /**
     * Display the specified resource.
     * 
     * @group Philosophers
     * 
     * 
     * @response 200 scenario="Success" {
     *   "success": true,
     *   "data": [
     *     {
     *       "id": 1,
     *       "name": "Acrion",
     *       "life": "5th/4th century BC",
     *       "school": "Pythagorean",
     *       "notes": "visited by Plato",
     *     }
     *   ]
     * }
     */
    public function show(Philosopher $philosopher)
    {
        return $this->success($philosopher);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @group Philosophers
     * 
     * @response 200 scenario="Success" {
     *   "success": true,
     *   "message": "Record updated successfully"
     *   "data": [
     *     {
     *       "id": 1,
     *       "name": "Acrion",
     *       "life": "5th/4th century BC",
     *       "school": "Pythagorean",
     *       "notes": "visited by Plato",
     *     }
     *   ]
     * }
     */
    public function update(Request $request, Philosopher $philosopher)
    {
        $validated = $request->validate([
            "name" => "string|max:255",
            "life" => "string|max:255",
            "school" => "string|max:255",
            "notes" => "string",
        ]);

        try {
            $philosopher->update($validated);

            return $this->success($philosopher, "Record updated successfully");
        } catch (Exception $e) {
            return $this->error(message: $e);
        }
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @group Philosophers
     * 
     */
    public function destroy(Philosopher $philosopher)
    {
        try {
            $philosopher->delete();

            return $this->success(message: "Record deleted successfully");
        } catch (Exception $e) {
            return $this->error(message: $e);
        }

    }
}
