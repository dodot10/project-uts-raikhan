<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FitnessController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        return view('fitness.index');
    }

    /**
     * Display the about page.
     */
    public function about()
    {
        return view('fitness.about');
    }

    /**
     * Display the course page.
     */
    public function course()
    {
        return view('fitness.course');
    }

    /**
     * Display the blog page.
     */
    public function blog()
    {
        return view('fitness.blog');
    }

    /**
     * Display the contact page.
     */
    public function contact()
    {
        return view('fitness.contact');
    }

    /**
     * Display the feature page.
     */
    public function feature()
    {
        return view('fitness.feature');
    }
}
