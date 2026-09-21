<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about-us');
    }

    public function services()
    {
        return view('services');
    }

    public function caseStudies()
    {
        return view('case-studies');
    }

    public function testimonials()
    {
        return view('testimonials');
    }

    public function blog()
    {
        return view('blog');
    }

    public function blogDetail()
    {
        return view('blog-detail');
    }

    public function contact()
    {
        return view('contact-us');
    }

    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    public function termsOfService()
    {
        return view('terms-of-service');
    }
}