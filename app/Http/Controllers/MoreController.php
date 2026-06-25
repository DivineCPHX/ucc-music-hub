<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoreController extends Controller
{
    public function moreAbout()
    {
        return view('more.about');
    }
    public function moreContact()
    {
        return view('more.contact');
    }
    public function moreFAQ()
    {
        return view('more.faq');
    }
    public function moreSubscriptions()
    {
        return view('more.subscriptions');
    }
    public function moreTestimonials()
    {
        return view('more.testimonials');
    }
}
