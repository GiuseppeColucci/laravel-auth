<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Book;

class PublicController extends Controller
{
    //qui inseriamo la index copiato dal bookController
    public function index()
    {
        $books= Book :: all();
        return view('public.index', compact('books'));

        //public.index è il percordo del file per arrivare all file index!!(da non condondere con :public-index che serve per dirigere la rotta)
    }
}
