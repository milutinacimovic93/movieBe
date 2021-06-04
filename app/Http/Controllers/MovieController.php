<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;

class MovieController extends Controller
{
    public function index() {
        return Movie::all();
    }

    public function store(MovieRequest $request) {
        return Movie::create($request->all());
    }

}
