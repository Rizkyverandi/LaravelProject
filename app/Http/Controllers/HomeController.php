<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;
use App\Episodes;
use App\Genres;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->movies = new Movies();
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

   
    public function index()
    {
        $movies = Movies::select('photo', 'id' ,'title', 'rating')->where('genre_id',1)->get();
        $kids = Movies::select('photo', 'id' , 'title', 'rating')->where('genre_id',2)->get();
        $tv= Movies::select('photo', 'id', 'title','rating')->where('genre_id',3)->get();
        $kate= Movies::where('id')->get();
        return view('index')->with('movies' , $movies)->with('kids',$kids)->with('tv',$tv)->with('kate',$kate);
    }


    public function detailPages($id)
    {
       $mov =  Movies::where('id',$id)->get();
       $eps =  Episodes::select('episode','title')->where('movie_id',$id)->paginate(5);
       return view('show')->with('mov',$mov)->with('eps',$eps);
    }

    public function categoryList($id)
    {   
        $ttle =  Genres::where('id',$id)->select("name")->get();
        $kat = Movies::select('photo', 'id' ,'title', 'rating', 'genre_id')->where('genre_id',$id)->get();
        return view('kategori')->with('kat',$kat)->with('ttle',$ttle);
    }
}
