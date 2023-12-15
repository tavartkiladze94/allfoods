<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\FoodsCategory;
use App\Models\FoodsIngredient;
use App\Models\FoodsInsertedIngredient;
class FoodsMainController extends Controller
{
    public function index($cat_id = null)
    {
        if(!empty($cat_id) || $cat_id !=0 || $cat_id !== null)
        {
            $category = FoodsCategory::where('id',$cat_id)->first();
            $foods = Food::where('category', $category->category_ka)->get();;
            
        }
        else{
           $data['foods'] = $foods = Food::all();
        }
        
        $foods_all = Food::orderBy('name_'.session('locale'))->get();
        $foods_ings = FoodsInsertedIngredient::all();
        $category_all = FoodsCategory::orderBy('category_'.session('locale'))->get();
        $ingredient_all = FoodsIngredient::orderBy('ingredient_'.session('locale'))->get();
        
        return view('main.foods.index', compact('foods','foods_all', 'foods_ings', 'category_all', 'ingredient_all'));
    }
    public function food_info(string $id)
    {
        $foodinfo =  Food::where('id',$id)->first();
        
        $foods = Food::all();
        $foods_all = Food::orderBy('name_'.session('locale'))->get();
        $foods_ings = FoodsInsertedIngredient::where('foods_code',$foodinfo->code)->get();
        $category_all = FoodsCategory::orderBy('category_'.session('locale'))->get();
        $ingredient_all = FoodsIngredient::orderBy('ingredient_'.session('locale'))->get();
        return view('main.foods.food_info', compact('foodinfo', 'foods', 'foods_all','foods_ings', 'category_all', 'ingredient_all'));
    }
}
