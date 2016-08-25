<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    //
    public function index()
    {
        return view('index')->with([
                "navPage" => "home"
            ]
        );
    }

    public function projects()
    {
        return view('projects')->with([
                "navPage" => "projects"
            ]
        );
    }

    public function code()
    {
        return view('code')->with([
                "navPage" => "code"
            ]
        );
    }

    public function consulting()
    {
        return view('consulting')->with([
                "navPage" => "consulting"
            ]
        );
    }

    public function about()
    {
        return view('about')->with([
                "navPage" => "about"
            ]
        );
    }

    public function caseStudies()
    {
        return view('case-studies')->with([
                "navPage" => "consulting"
            ]
        );
    }

    public function whygo()
    {
        return view('case-studies/whygo')->with([
                "navPage" => "consulting"
            ]
        );
    }

    public function bokaKanot()
    {
        return view('case-studies/boka-kanot')->with([
                "navPage" => "consulting"
            ]
        );
    }
    public function ariaTemplates()
    {
        return view('case-studies/aria-templates')->with([
                "navPage" => "consulting"
            ]
        );
    }

    public function digitalAgencies()
    {
        return view('digital-agencies')->with([
                "navPage" => "consulting"
            ]
        );
    }

 public function topTier()
    {
        return view('top-tier')->with([
                "navPage" => "consulting"
            ]
        );
    }


}
