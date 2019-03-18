<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SiteInfoRequest;
use App\SiteInfo;
use Illuminate\Support\Facades\Artisan;
use Spatie\UptimeMonitor\Models\Monitor;
use Spatie\UptimeMonitor\MonitorRepository;

class SiteInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        Artisan::call('monitor:list');
        $output = Artisan::output();
        return view('siteInfo', compact('output'));
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

        Artisan::call('monitor:create ' . $request->url);
        Artisan::call('monitor:enable ' . $request->url);

        return redirect('/siteInfo');
    }

}
