<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Recipe;

class MyRecipesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the recipes page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();
        $recipes = Recipe::where('user_id', $user->id)->get();

        return view('myRecipes')->with('recipes', $recipes);
    }

    
}
