@extends('frontend.layouts.main')
@include('frontend.layouts.header')
@include('frontend.layouts.footer')


@section('contents')
    <div class="main-wrapper overflow-hidden">
        <!-- ------------------------------------- -->
        <!-- banner Start -->
        <!-- ------------------------------------- -->
        {{-- <section class="bg-primary-subtle py-14"> --}}
        <section class="py-14 section-dark"
            style="background-image: url({{ asset('assets/images/frontend-pages/bg-sejarah2.jpg') }}); background-size: cover; background-position: center;">
            <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 20vh">
                <div class="text-center">
                    <h1 class="fw-bolder text-white fs-12">Visi & Misi</h1>
                </div>
            </div>
        </section>
        <!-- ------------------------------------- -->
        <!-- banner End -->
        <!-- ------------------------------------- -->

        <!-- ------------------------------------- -->
        <!-- Visi & Misi Start -->
        <!-- ------------------------------------- -->
        <section class="pt-2 pt-md-14 pt-lg-8 pb-4 pb-md-5 pb-lg-14">
            <div class="container-fluid">
                <div class="card shadow-none border">
                    <div class="card-body p-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card bg-primary">
                                    <div class="card-body text-center p-4 pt-7">
                                        <p class="mb-3  text-white">
                                            VISI Ikatan Pranata Humas
                                        </p>
                                        <h4 class="text-center text-wrap mb-3 text-white">
                                            Menjadi organisasi profesi Pranata Humas unggulan dalam mendukung pengelolaan
                                            komunikasi publik yang efektif.
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- <div class="col-lg-12 d-flex items-center justify-content-center pb-4 pb-md-5 pb-lg-14">
                                <div class="item rounded-4 overflow-hidden">
                                    <img src="{{ asset('assets/images/frontend-pages/bg-sejarah.jpg') }}" alt=""
                                        class="img-fluid">
                                </div>
                            </div> --}}
                            <div class="col-lg-12">
                                <div class="shop-content">
                                    <h4 class="mb-3 text-center">MISI Ikatan Pranata Humas</h4>
                                    <ol class="mb-5">
                                        <li class="mb-3">Meningkatkan citra dan reputasi positif Pemerintah</li>
                                        <li class="mb-3">Menyosialisasikan kebijakan dan program Pemerintah</li>
                                        <li class="mb-3">Membangun Sumber Daya Manusia Pranata Humas kompeten</li>
                                        <li>Memperkuat organisasi profesi Pranata Humas</li>
                                    </ol>

                                    <h4 class="mb-3 text-center">CORE VALUES</h4>
                                    <p class="mb-5 text-center"><b>Berakhlak:</b> Berorientasi pelayanan, akuntabel,
                                        kompeten,
                                        harmonis,
                                        loyal, adaptif, dan kolaboratif</p>

                                    <h4 class="mb-3 text-center">TAGLINE</h4>
                                    <p class="mb-5 text-center"><b>Terpesona:</b> Terpercaya, Profesional, dan Bertalenta
                                    </p>

                                    <h4 class="mb-3 text-center">ARTI LOGO</h4>
                                    <p class="mb-3">Logo sendiri menyimbolkan komunikasi antar manusia sebagai basis kerja
                                        JFPH (berupa siluet manusia bercakap) dan keseimbangan sebagai hasil kerja aktifitas
                                        komunikasi yang dilakukan (dilambangkan dengan dua titik simetris).</p>
                                    <p class="mb-3"><b>Bentuk Font:</b> Bersih, Rapi dan Jernih (lambang komunikasi yang
                                        berhasil)</p>
                                    <p class="mb-3"><b>Warna:</b> Kontras dan Berbobot (bergaya/berkelas)</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ------------------------------------- -->
        <!-- Visi & Misi End -->
        <!-- ------------------------------------- -->
    </div>
@endsection
