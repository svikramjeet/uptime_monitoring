<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SiteInfoRequest;
use App\SiteInfo;

class SiteInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('siteInfo');
    }

    public function create()
    {
        return view('siteInfo_create');
    }

    public function store(SiteInfoRequest $request)
    {
        SiteInfo::create([
            'site_name' => $request->site_name,
            'url' => $request->url,
            'is_crawled' => false,
        ]);
        return redirect('/siteInfo');
    }

}
