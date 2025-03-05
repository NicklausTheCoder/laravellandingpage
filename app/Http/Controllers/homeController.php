<?php

namespace App\Http\Controllers;
use App\Models\Navigation;
use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\feature;
use App\Models\About;
use App\Models\client;
use App\Models\featurecard;
use App\Models\testimonial;
use App\Models\service;
use App\Models\pricing;





class homeController extends Controller
{
    public function index()
    {
        $hero = Hero::first(); // Fetch the first hero record
        $about = About::first();
        $features = feature::orderBy('order')->get(); 
        $navigations = Navigation::with('children.children')->whereNull('parent_id')->orderBy('order')->get();
        $featureCards = FeatureCard::orderBy('order')->get();
        $clients = Client::orderBy('order')->get(); 
        $testimonials = testimonial::orderBy('order')->get(); 
        $services = Service::orderBy('order')->get();
        $pricingPlans = Pricing::orderBy('order')->get();





        return view('home', compact('hero', 'navigations' , 'about' , 'features', 'featureCards', 'clients', 'testimonials', 'services', 'pricingPlans'));
    }
}
