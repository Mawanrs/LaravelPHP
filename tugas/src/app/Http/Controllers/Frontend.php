<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Home;
use App\Models\About;
use App\Models\Table;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Service;
use Illuminate\Http\Request;

class Frontend extends Controller
{

  public function getdb(){
        $About = About::all();
        $Home = Home::all();
        $product = product::all();
        $table = Table::all();
        return view('layouts.index', compact('About', 'product','table','Home'));
    }

    // public function about() {
    //     $modelabout = new About;
    //     $dataabout = $modelabout->get();

    //     $modelfooter = new Profile();
    //     $datafooter = $modelfooter->get();
    //     return view('frontend.about', compact('dataabout','datafooter'));
    // }

    // public function service(){
    //     $dataservice = Service::all();
    //     $datafooter = Profile::all(); 
    //     return view('frontend.service', compact('dataservice', 'datafooter'));
    // }
    

    // public function product(){
    //     $modelproduct = new Product;
    //     $dataproduct = Product::all();
    //     return view('frontend.portfolio-details', compact('dataproduct'));
    //     return view('frontend.portfolio-details', ['dataproduct']);
    // }

    // public function gallery(){
    //     $datagallery = Gallery::all();
    //     $datafooter = Profile::all();
    //     return view('frontend.service', compact('dataservice', 'datafooter'));
    // }

    // public function portfolioDetail(){
    //     $modelproduct = new product;
    //     $dataproduct = Product::all();
    //     return view('frontend.portfolio-details', compact('dataproduct'));
    // }
}