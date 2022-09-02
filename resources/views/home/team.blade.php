@extends('layouts.main')

@section('title', 'Cuanku | Team Kami')

@section('content')
<section class="wrapper bg-primary">
    <div class="container pt-10 pt-md-14 text-center">
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <h1 class="display-1 mb-5 text-white">Team Cuan.ku</h1>
                <p class="lead fs-lg mb-10 text-info">- Meet Our Team -</p>
            </div>
        </div>
    </div>
    {{-- <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="{{ asset('assets/img/bg-team.png') }}" alt="" /></figure> --}}
</section>

<section class="wrapper bg-light">
    <div class="container py-5 py-md-5">
        <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
            @foreach ($teams as $team)
            <div class="col-md-6 col-lg-3 mt-10">
                <div class="position-relative">
                    <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                    <div class="card">
                        <figure class="card-img-top"><img class="img-fluid" src="{{ asset('storage/' . $team->image)}}" srcset="./assets/img/avatars/t1@2x.jpg 2x" alt="" /></figure>
                        <div class="card-body px-6 py-5">
                            <h4 class="mb-1">{{ $team->name }}</h4>
                            <p class="mb-0">{{ $team->position }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection