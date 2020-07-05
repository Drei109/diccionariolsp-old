<?php

namespace App\Http\Controllers;

use App\Senia;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function showVariousFoods()
    {
        $title = "Frutas, verduras y otros";
        $categories_array = [2, 3, 4];

        $senias = $this->getSigns($categories_array);
        $content = array();

        foreach ($senias as $senia) {
            $first_letter = mb_strtoupper($senia->palabra->descripcion[0], 'UTF-8');
            $content[$first_letter][] = $senia;
        }

        $a = 1;
        return view('categories.content', compact(['title', 'content']));
    }

    public function showDrinks()
    {
        $title = "Bebidas";
        $categories_array = [5];
        $senias = $this->getSigns($categories_array);

        $content = array();

        foreach ($senias as $senia) {
            $first_letter = mb_strtoupper($senia->palabra->descripcion[0], 'UTF-8');
            $content[$first_letter][] = $senia;
        }


        return view('categories.content', compact(['title', 'content']));
    }

    public function showDishes()
    {
        $title = "Comidas";
        $categories_array = [6];
        $senias = $this->getSigns($categories_array);

        $content = array();

        foreach ($senias as $senia) {
            $first_letter = mb_strtoupper($senia->palabra->descripcion[0], 'UTF-8');
            $content[$first_letter][] = $senia;
        }


        return view('categories.content', compact(['title', 'content']));
    }

    public function getSigns($categories_array)
    {
        $senias =  Senia::whereHas('palabra', function ($query) use ($categories_array) {
            $query->whereHas('categorias', function ($query) use ($categories_array) {
                $query->whereIn('categorias.id', $categories_array);
            })->orderBy('descripcion', 'desc');
        })
            ->with('palabra')
            ->get()
            ->sortBy('palabra.descripcion');

        return $senias;
    }
}
