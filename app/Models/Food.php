<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\FoodsInsertedIngredient;
class Food extends Model
{
    protected $table = "foods";
    
    protected $guarded = [];
    
    public static function store($request)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $data['name_ka'] = $request->name_ka;
        $data['name_en'] = $request->name_en;
        $data['name_ru'] = $request->name_ru;
        $data['category'] = $request->category;
        $request->samarxvo == 1 ? $data['samarxvo'] = $request->samarxvo : $data['samarxvo'] = 0 ;
        $request->dieturi == 1 ? $data['dieturi'] = $request->dieturi : $data['dieturi'] = 0 ;
        $request->vegetarianuli == 1 ? $data['vegetarianuli'] = $request->vegetarianuli : $data['vegetarianuli'] = 0 ;
        $data['description'] = $request->description;
        $data['view'] = 0;
        $data['code'] = substr(str_shuffle(str_repeat($pool, 12)), 0, 12);
        $data['file_name'] = '';
        if($request->hasFile('file_name'))
        {
            $destination = 'assets/images/foods';
            $extension = $request->file('file_name')->getClientOriginalExtension(); 
            $file_name = substr(str_shuffle(str_repeat($pool, 12)), 0, 12). '.' . $extension; 
            $file_src = '/' . $destination . '/'. $file_name; 
            if (!file_exists($destination)) 
            {
                mkdir($destination, 0777, true); 
            }
            $request->file('file_name')->move($destination, $file_name); 
            $data['file_name'] = $file_name;

        }
        
        $store = Food::create($data); 
        $foods_ings = FoodsIngredient::all();

        foreach($foods_ings as $food_ing)
        {
            if($request->input('ing_'.$food_ing->id) ==1)
            {
                $ings_data['ingredient_id'] = $food_ing->id;
                $ings_data['foods_code'] = $data['code'];
                $save = FoodsInsertedIngredient::create($ings_data);
            }
        }
        if($store)
        {
            return true;
        }
        return false; 
        
    }
    public static function updateFood($request, $food)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $data['name_ka'] = $request->name_ka;
        $data['name_en'] = $request->name_en;
        $data['name_ru'] = $request->name_ru;
        $data['category'] = $request->category;
        $request->samarxvo == 1 ? $data['samarxvo'] = $request->samarxvo : $data['samarxvo'] = 0 ;
        $request->dieturi == 1 ? $data['dieturi'] = $request->dieturi : $data['dieturi'] = 0 ;
        $request->vegetarianuli == 1 ? $data['vegetarianuli'] = $request->vegetarianuli : $data['vegetarianuli'] = 0 ;
        $data['description'] = $request->description;
        $data['view'] = 0;
        
        if($request->hasFile('file_name'))
        {
            $destination = 'assets/images/foods';
            $extension = $request->file('file_name')->getClientOriginalExtension(); 
            $file_name = substr(str_shuffle(str_repeat($pool, 12)), 0, 12). '.' . $extension; 
            $file_src = '/' . $destination . '/'. $file_name; 
            if (!file_exists($destination)) 
            {
                mkdir($destination, 0777, true); 
            }
            if(($food->file_name !='') && (file_exists($destination.'/'.$food->file_name)))
            {
                 unlink($destination.'/'.$food->file_name);
            }
            $request->file('file_name')->move($destination, $file_name); 
            $data['file_name'] = $file_name;

        }
        $store = $food->update($data); 
        $foods_ings = FoodsIngredient::all();
        $ings_delete = FoodsInsertedIngredient::where('foods_code', $food->code)->delete();
        foreach($foods_ings as $food_ing)
        {
            if($request->input('ing_'.$food_ing->id) ==1)
            {
                $ings_data['ingredient_id'] = $food_ing->id;
                $ings_data['foods_code'] = $food->code;
                $save = FoodsInsertedIngredient::create($ings_data);
            }
        }
        if($store)
        {
            return true;
        }
        return false; 
        
    }
    
}
