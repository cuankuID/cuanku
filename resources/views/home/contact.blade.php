@extends('layouts.main')

@section('title', 'Cuanku | Kontak')

@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white" data-image-src="./assets/img/photos/bg3.jpg">
    <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-1 mb-3 text-white">Kontak Kami</h1>
                <nav class="d-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb text-white">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kontak</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light angled upper-end">
    <div class="container pb-11">
        <div class="row mb-14 mb-md-16">
            <div class="col-xl-10 mx-auto mt-n19">
            <div class="card">
                <div class="row gx-0">
                <div class="col-lg-6 align-self-stretch">
                    <div class="map map-full rounded-top rounded-lg-start">
                    <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBUGAEUoSbD7yvjPCFMeRD6OiGaHMLGKLM&q=-7.559239474903791, 110.85634206701435" style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
                    </div>
                    <!-- /.map -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <div class="p-10 p-md-11 p-lg-14">
                    <div class="d-flex flex-row">
                        <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                        </div>
                        <div class="align-self-start justify-content-start">
                        <h5 class="mb-1">Alamat</h5>
                        <address>Univeritas Sebelas Maret, <br class="d-none d-md-block" />Jl. Ir. Sutami No.36, Kentingan, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126</address>
                        </div>
                    </div>
                    <!--/div -->
                    <div class="d-flex flex-row">
                        <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                        </div>
                        <div>
                        <h5 class="mb-1">Telepon</h5>
                        <p>00 (123) 456 78 90 <br />00 (987) 654 32 10</p>
                        </div>
                    </div>
                    <!--/div -->
                    <div class="d-flex flex-row">
                        <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                        </div>
                        <div>
                        <h5 class="mb-1">E-mail</h5>
                        <p class="mb-0"><a href="mailto:hello.cuankuid@gmail.com" class="link-body">hello.cuankuid@gmail.com</a></p>
                        {{-- <p class="mb-0"><a href="mailto:help@sandbox.com" class="link-body">help@sandbox.com</a></p> --}}
                        </div>
                    </div>
                    <!--/div -->
                    </div>
                    <!--/div -->
                </div>
                <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.card -->
            </div>
            <!-- /column -->
        </div>

        {{-- <div class="row">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
            <h2 class="display-4 mb-3 text-center">Drop Us a Line</h2>
            <p class="lead text-center mb-10">Reach out to us from our contact form and we will get back to you shortly.</p>
            <form class="contact-form needs-validation" method="post" action="./assets/php/contact.php" novalidate>
                <div class="messages"></div>
                <div class="row gx-4">
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required>
                    <label for="form_name">First Name *</label>
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please enter your first name. </div>
                    </div>
                </div>
                <!-- /column -->
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" required>
                    <label for="form_lastname">Last Name *</label>
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please enter your last name. </div>
                    </div>
                </div>
                <!-- /column -->
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
                    <label for="form_email">Email *</label>
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please provide a valid email address. </div>
                    </div>
                </div>
                <!-- /column -->
                <div class="col-md-6">
                    <div class="form-select-wrapper mb-4">
                    <select class="form-select" id="form-select" name="department" required>
                        <option selected disabled value="">Select a department</option>
                        <option value="Sales">Sales</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Customer Support">Customer Support</option>
                    </select>
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please select a department. </div>
                    </div>
                </div>
                <!-- /column -->
                <div class="col-12">
                    <div class="form-floating mb-4">
                    <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                    <label for="form_message">Message *</label>
                    <div class="valid-feedback"> Looks good! </div>
                    <div class="invalid-feedback"> Please enter your messsage. </div>
                    </div>
                </div>
                <!-- /column -->
                <div class="col-12 text-center">
                    <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Send message">
                    <p class="text-muted"><strong>*</strong> These fields are required.</p>
                </div>
                <!-- /column -->
                </div>
                <!-- /.row -->
            </form>
            <!-- /form -->
            </div>
            <!-- /column -->
        </div> --}}

    </div>
</section>
@endsection

