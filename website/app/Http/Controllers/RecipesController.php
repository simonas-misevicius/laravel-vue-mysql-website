<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class RecipesController extends Controller
{
    //
    public function getSecond()
    {
        $second = DB::table('recipes')->where('id', '=', '2')->first();
        return Inertia::render('second',[
            'title' => $second->title,
            'ingredients' => $second->ingredients,
            'instructions' => $second->instructions,
            'image_name' => 'Food Images/'.$second->image_name.'.jpg'
        ]);
        
    }
}
