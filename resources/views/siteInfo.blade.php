@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">SiteInfo 
                  <a class="btn btn-default" style="float: right;" href="{{ route('siteInfoCreate') }}">{{ __('Add new') }}</a>
                </div>

                <div class="card-body">
                   	<pre> {{ $output }} </pre>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
