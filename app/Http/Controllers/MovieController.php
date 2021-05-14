<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Resources\Movie as MovieResource;
use Illuminate\Http\Request;
use App\Http\Resources\MovieCollection;

class MovieController extends Controller
{
    
    /**
     * View a single movie
     *
     * @param Movie $movie [explicite description]
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function view(Request $request)
    {
        $movie = Movie::findorFail($request->id);
        $single = new MovieResource($movie);
        return response()->json(['status'=> 1, 'data'=>$single], Response::HTTP_OK);
    }

    
    /**
     * Currently hot movies
     *
     * @param Request $request [explicite description]
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function hotMovies(Request $request)
    {
        $movies = MovieCollection::collection(Movie::hot()->get());

        return response()->json($movies);
    }

    
    /**
     * Movies that will be here soon
     *
     * @param Request $request [explicite description]
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function soonMovies(Request $request)
    {
        $movies = MovieCollection::collection(Movie::soon()->get());

        return response()->json($movies);
    }

    
    /**
     * Recommended Movies 
     *
     * @param Request $request [explicite description]
     *
     * @return void
     */
    public function recommendMovies(Request $request)
    {
        $user = $request->user() ?? User::find(1); // for test reasons

        $movies = $user->recommendations();


        return response()->json($movies);
        
    }
}
