<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = Pizza::all();
        return $pizzas;
    }
    public function show($id){
        $pizza = Pizza::find($id);
        return $pizza;
    }
    public function destroy($id){
        Pizza::find($id)->delete();
    }
    public function store(Request $request){
        $Pizza = new Pizza();
        $Pizza->name = $request->name;
        $Pizza->ingredients = $request->ingredients;
        $Pizza->save();
    }
    public function update(Request $request, $id){
        $Pizza = Pizza::find($id);
        $Pizza->name = $request->name;
        $Pizza->ingredients = $request->ingredients;
        $Pizza->save();
    }
    public function sajtos(){
        $s_pizza = DB::table("pizzas as p")
        ->select("p.name", "p.ingredients")
        ->where("p.ingredients", 'LIKE', "%sajt%")
        ->get();
        return $s_pizza;
    }
    public function pizza_db(){
        $db_pizza = DB::table("pizzas")
        ->count("pizza_id");
        return $db_pizza;
    }
}