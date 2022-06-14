@extends('layouts.app')

@section('title', 'Cuanku | Dashboard Post')

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>
    <link rel="stylesheet" href="{{ asset('assets-app/css/map.css') }}">
@endsection

@section('content')
<div class="main-content">
    <section class="section">
        @include('components.header-app', ['title' => 'Search Consultant Office'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    {{-- @dump($consultantOffices) --}}
                    <div class="card-header">
                        <h4>Maps</h4>
                    </div>
                    <div class="card-body">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.js" charset="utf-8"></script>
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
<script src="{{ asset('assets-app/js/map.js') }}"></script>
@endsection

