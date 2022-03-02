<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Gallery;
use App\Models\Likes;

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

    public function getLike(Request $request){
        $galleryID = $request['galleryID'];

        $like = Likes::where('gallery_id', $galleryID)->count();

        $params = [
            'like' => $like,
        ];

        return response()->json($params);
    }

    public function getViews(Request $request){
        $gallery = Gallery::find($request['galleryID']);
        
        $views = $gallery['views'];

        $gallery->fill([
            'views' => $views + 1,
        ]);

        $gallery->save();
    }

    public function knowLike(Request $request){
        $userID = $request['userID'];
        $galleryID = $request['galleryID'];

        $like = Likes::where('user_id', $userID)->where('gallery_id', $galleryID)->get();
        $count = count($like);

        $params = [
            'data' => $count
        ];

        return response()->json($params);
    }

    public function addLike(Request $request){
        $userID = $request['userID'];
        $galleryID = $request['galleryID'];

        Likes::create([
            'user_id' => $userID,
            'gallery_id' => $galleryID
        ]);

        $like = Likes::where('gallery_id', $galleryID)->count();

        $params = [
            'like' => $like,
        ];

        return response()->json($params);

    }

    public function deleteLike(Request $request){
        $userID = $request['userID'];
        $galleryID = $request['galleryID'];

        Likes::where('user_id',$userID)->where('gallery_id',$galleryID)->delete();

        $like = Likes::where('gallery_id', $galleryID)->count();

        $params = [
            'like' => $like,
        ];

        return response()->json($params);
    }
}
