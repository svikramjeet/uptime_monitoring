@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">SiteInfo</div>

                <div class="card-body">
                   <form method="post" action="{{ url('/siteInfo') }}">
                        @csrf
                        <div class="form-group">
                            <label>Site Name</label>
                            <input type="text" required name="site_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Url</label>
                            <input type="url" required name="url" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-primary">
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
