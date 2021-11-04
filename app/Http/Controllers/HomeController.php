<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\About;
use App\Models\Blog;
use App\Models\Work;
use App\Models\User;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $about = About::first();
        $services = Service::paginate(6);
        $works = Work::paginate(9);

        return view('home',compact('about','services','works'));
    }

}
