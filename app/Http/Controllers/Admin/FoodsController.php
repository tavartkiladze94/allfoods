<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\FoodsCategory;
use App\Models\FoodsIngredient;
use App\Models\FoodsInsertedIngredient;

class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods_all = Food::orderBy('id', 'desc')->get();;
        return view('admin.foods.foods_all', compact('foods_all'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category_all = FoodsCategory::orderBy('category_'.session('locale'))->get();
        $ingredient_all = FoodsIngredient::orderBy('ingredient_'.session('locale'))->get();
        return view('admin.foods.food_create', compact('category_all', 'ingredient_all'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $food = Food::store($request); 
        $request->session()->flash('result', $food);
        
        if($food == false) 
        {
            return redirect()->route('foods.create');
        }
       
        return redirect()->route('foods.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        $food =  Food::where('id',$id)->first();
        $foods_ings = FoodsInsertedIngredient::where('foods_code', $food->code)->get();

        $category_all = FoodsCategory::orderBy('category_'.session('locale'))->get();
        $ingredient_all = FoodsIngredient::orderBy('ingredient_'.session('locale'))->get();
        $tmp = array();
        if(!empty($foods_ings))
        {
            foreach($foods_ings as $ings)
            {
                $tmp[$ings->ingredient_id] = $ings;
            }
         }
        return view('admin.foods.food_edit', compact('food','foods_ings', 'tmp','category_all', 'ingredient_all'));
    }

    /**
     * Update the spe cified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $food = Food::findOrFail($id);
        $update = Food::updateFood($request, $food); 
        $request->session()->flash('result', $update);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $food = Food::find($id);
        $ings_delete = FoodsInsertedIngredient::where('foods_code', $food->code)->delete();
        $destination = 'assets/images/foods';
        if(($food->file_name !='') && (file_exists($destination.'/'.$food->file_name)))
        {
            unlink($destination.'/'.$food->file_name);
        }
        $food_delete = $food->delete();
        $request->session()->flash('result', $food_delete);
        return redirect()->route('foods.index');
    }
    
}
