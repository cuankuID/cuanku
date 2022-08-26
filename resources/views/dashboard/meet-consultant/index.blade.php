@extends('layouts.app')

@section('title', 'Cuanku | Janji Temu Konsultan')

@section('css-libraries')
<link rel="stylesheet" href="{{ asset('node_modules/bootstrap-social/bootstrap-social.css') }}">
<link rel="stylesheet" href="{{ asset('node_modules/owl.carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('node_modules/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
        @include('components.header-app', ['title' => 'Janji Temu Konsultan'])

            <div class="row">
                <div class="col-lg-5 col-md-12 col-12 col-sm-12">
                  <div class="card card-info">
                    <div class="card-header">
                        <h4>Sliders</h4>
                    </div>
                    <div class="card-body">
                        <div class="owl-carousel owl-theme slider" id="slider1">
                          <div><img alt="image" src="{{ asset('assets-app/img/news/img01.jpg') }}"></div>
                          <div><img alt="image" src="{{ asset('assets-app/img/news/img08.jpg') }}"></div>
                          <div><img alt="image" src="{{ asset('assets-app/img/news/img10.jpg') }}"></div>
                          <div><img alt="image" src="{{ asset('assets-app/img/news/img09.jpg') }}"></div>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-7 col-md-12 col-12 col-sm-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Konsultan</h4>
                            <div class="card-header-action">
                              <a href="#" class="btn btn-primary btn-icon icon-right">Cari Lebih Banyak <i class="fas fa-search"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                          <div class="owl-carousel owl-theme" id="users-carousel">
                            <div>
                              <div class="user-item">
                                <img alt="image" src="{{ asset('assets-app/img/avatar/avatar-1.png') }}" class="img-fluid">
                                <div class="user-details">
                                  <div class="user-name">Hasan Basri</div>
                                  <div class="text-job text-muted">Web Developer</div>
                                  <div class="user-cta">
                                    <button class="btn btn-primary follow-btn" data-follow-action="alert('user1 followed');" data-unfollow-action="alert('user1 unfollowed');">Follow</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div>
                              <div class="user-item">
                                <img alt="image" src="{{ asset('assets-app/img/avatar/avatar-2.png') }}" class="img-fluid">
                                <div class="user-details">
                                  <div class="user-name">Kusnaedi</div>
                                  <div class="text-job text-muted">Mobile Developer</div>
                                  <div class="user-cta">
                                    <button class="btn btn-primary follow-btn" data-follow-action="alert('user2 followed');" data-unfollow-action="alert('user2 unfollowed');">Follow</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div>
                              <div class="user-item">
                                <img alt="image" src="{{ asset('assets-app/img/avatar/avatar-3.png') }}" class="img-fluid">
                                <div class="user-details">
                                  <div class="user-name">Bagus Dwi Cahya</div>
                                  <div class="text-job text-muted">UI Designer</div>
                                  <div class="user-cta">
                                    <button class="btn btn-danger following-btn" data-unfollow-action="alert('user3 unfollowed');" data-follow-action="alert('user3 followed');">Following</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div>
                              <div class="user-item">
                                <img alt="image" src="{{ asset('assets-app/img/avatar/avatar-4.png') }}" class="img-fluid">
                                <div class="user-details">
                                  <div class="user-name">Wildan Ahdian</div>
                                  <div class="text-job text-muted">Project Manager</div>
                                  <div class="user-cta">
                                    <button class="btn btn-primary follow-btn" data-follow-action="alert('user4 followed');" data-unfollow-action="alert('user4 unfollowed');">Follow</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div>
                              <div class="user-item">
                                <img alt="image" src="{{ asset('assets-app/img/avatar/avatar-5.png') }}" class="img-fluid">
                                <div class="user-details">
                                  <div class="user-name">Deden Febriansyah</div>
                                  <div class="text-job text-muted">IT Support</div>
                                  <div class="user-cta">
                                    <button class="btn btn-primary follow-btn" data-follow-action="alert('user5 followed');" data-unfollow-action="alert('user5 unfollowed');">Follow</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
            
        </section>
    </div>
@endsection

@section('js-libraries')
<script src="{{ asset('node_modules/owl.carousel/dist/owl.carousel.min.js') }}"></script>
@endsection

@section('js-specific-page')
<script src="{{ asset('assets-app/js/page/components-user.js') }}"></script>
<script src="{{ asset('assets-app/js/page/modules-slider.js') }}"></script>
@endsection