<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $restaurants = DB::table('restaurants')->simplePaginate(10);

        return response()->json([
            'restaurants' => $restaurants,
        ]);
    }

    public function getRestaurantID($id): \Illuminate\Http\JsonResponse
    {

        $menu = DB::table('menus')->where('restaurant_id', $id)->simplePaginate(5);

        return response()->json([
            'Restaurant id' => $menu[0]->restaurant_id,
            'Item' => $menu[0]->Item,
            'Category' => $menu[0]->Category,

        ]);

    }

    public function addCategoryToItem($id, Request $request)
    {
        $itemFromPayload = $request->input('Item');
        $categoryFromPayload = $request->input('Category');

        DB::table('menus')->insert([
            'restaurant_id' => $id,
            'Item' => $itemFromPayload,
            'Category' => $categoryFromPayload,
        ]);

        return response()->json([
            'Status' => 'Success',
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
