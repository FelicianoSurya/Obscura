<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index(){
        $favourites = Gallery::orderBy('views','asc')->take(5)->get();

        return view('ObscuraExibition.page.landing',[
            'title' => 'OBSCURA EXHIBITION',
            'favourites' => $favourites,
        ]);
    }

    public function gallery(){
        $galleries = Gallery::all();

        return view('ObscuraExibition.page.gallery',[
            'title' => 'GALLERY EXHIBITION',
            'gallery' => $galleries,
        ]);
    }
}
