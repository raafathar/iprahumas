@extends('errors.error')
@section('title', __('Not Found'))
@section('404')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed"
        data-header-position="fixed">
        <div class="position-relative overflow-hidden min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-lg-4">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/errors/404.svg') }}" alt="" class="img-fluid"
                                width="500">
                            <h1 class="fw-semibold mb-7 fs-9">404 Not Found</h1>
                            <h4 class="fw-semibold mb-7">Oops! Halaman yang anda cari tidak ditemukan.</h4>
                            <a class="btn btn-primary" href="{{ route('admin.dashboard.index') }}" role="button">Go Back to
                                Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
