@extends('frontend.layouts.main')
@include('frontend.layouts.header')
@include('frontend.layouts.footer')


@section('contents')
    <div class="main-wrapper overflow-hidden">
        <!-- ------------------------------------- -->
        <!-- banner Start -->
        <!-- ------------------------------------- -->
        <section class="py-14 section-dark"
            style="background-image: url({{ asset('assets/images/frontend-pages/bg-sejarah2.jpg') }}); background-size: cover; background-position: center;">
            <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 20vh">
                <div class="text-center">
                    <h1 class="fw-bolder text-white fs-12">Kode Etik Keanggotaan</h1>
                </div>
            </div>
        </section>
        <!-- ------------------------------------- -->
        <!-- banner End -->
        <!-- ------------------------------------- -->

        <!-- ------------------------------------- -->
        <!-- Kode Etik Keanggotaan Start -->
        <!-- ------------------------------------- -->
        <section class="pt-2 pt-md-14 pt-lg-8 pb-4 pb-md-5 pb-lg-14">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body p-4 d-flex justify-content-center align-items-center">
                        <iframe src="https://drive.google.com/file/d/1Vsuw8SEHOz7jZthOuksrqB8sV-hafsCZ/preview"
                            width="90%" height="700" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- ------------------------------------- -->
        <!-- Kode Etik Keanggotaan End -->
        <!-- ------------------------------------- -->
    </div>
@endsection
