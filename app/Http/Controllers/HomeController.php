<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');


        // $this->middleware(function ($request, $next) {
        //     $this->loggedInUser = auth()->user();
        //     if($this->loggedInUser->user_type == 'admin'){
        //         return $next($request);
        //     }else {
        //         return redirect()->route('/');
        //     }
            
        // }, ['except' => ['']]);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $patients = Patient::all();
        return view('dashboard.index')
                ->with('patients',$patients);
    }
}
