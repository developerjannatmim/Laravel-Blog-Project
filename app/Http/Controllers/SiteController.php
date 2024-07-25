<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function showHome()
    {
        return view('home');
    }

    public function showAbout()
    {
        return view('about');
    }

    public function showService()
    {
        return view('services');
    }

    public function showPortfolio()
    {
        return view('portfolio');
    }

    public function showReviews()
    {
        return view('reviews');
    }

    public function showTeam()
    {
        return view('team');
    }

    public function showContact()
    {
        return view('contact');
    }

    public function showBlog()
    {
        return view('blog');
    }
}
