<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    @vite(['resource/js/app.js', 'resource/css/style.css'])
    <title>Modernize Bootstrap Admin</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- Mask Jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset('assets/images/logos/favicon.png') }}" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper" class="auth-customizer-none">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-xl-6"
                        style="background-image: url('../assets/images/frontend-pages/bg-sejarah2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: left;">
                        <a href="../main/index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                            <img src="../assets/images/logos/logo.png" class="dark-logo" alt="Logo-Dark"
                                height="58" />
                            <img src="../assets/images/logos/logo.png" class="light-logo" alt="Logo-light"
                                height="58" />
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <div
                            class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                            <div class="auth-max-width-register col-sm-8 col-md-6 col-xl-12 px-4">
                                <h2 class="mb-10 fs-7 fw-bolder">Form Registrasi</h2>
                                <form method="POST" id="register-form" action="{{ route('register') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div id="form-container">

                                        <div class="d-none border-top border-secondary pt-3">
                                            <h4 class="text-black mb-10">Data Pribadi</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    {{-- start username --}}
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Nama Lengkap</label>
                                                        <input id="username" type="text" name="username"
                                                            value="{{ old('username') }}" autofocus
                                                            autocomplete="username" class="form-control">
                                                    </div>
                                                    <span class="text-danger" id="username-message"></span>
                                                    @if ($errors->get('username'))
                                                        <ul>
                                                            @foreach ((array) $errors->get('username') as $message)
                                                                <li class="text-danger">{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    {{-- end username --}}
                                                </div>
                                                <div class="col-md-6">
                                                    {{-- start email --}}
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input id="email" type="text" name="email"
                                                            value="{{ old('email') }}" autofocus autocomplete="email"
                                                            class="form-control">
                                                    </div>
                                                    <span class="text-danger" id="email-message"></span>
                                                    @if ($errors->get('email'))
                                                        <ul>
                                                            @foreach ((array) $errors->get('email') as $message)
                                                                <li class="text-danger">{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    {{-- end email --}}
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    {{-- start NIP --}}
                                                    <div class="mb-3">
                                                        <label for="NIP" class="form-label">NIP</label>
                                                        <input id="NIP" type="text" name="NIP"
                                                            value="{{ old('NIP') }}" autofocus autocomplete="NIP"
                                                            class="form-control">
                                                    </div>
                                                    <span class="text-danger" id="NIP-message"></span>
                                                    @if ($errors->get('NIP'))
                                                        <ul>
                                                            @foreach ((array) $errors->get('NIP') as $message)
                                                                <li class="text-danger">{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    {{-- end NIP --}}
                                                </div>
                                                <div class="col-md-6">
                                                    {{-- start f_tanggal_lahir --}}
                                                    <div class="mb-3">
                                                        <label class="form-label">Tanggal Lahir</label>
                                                        <input class="form-control" id="f_tanggal_lahir" type="text"
                                                            name="f_tanggal_lahir" value="{{ old('f_tanggal_lahir') }}"
                                                            autofocus autocomplete="f_tanggal_lahir">
                                                        <span class="text-danger" id="f_tanggal_lahir-message"></span>
                                                        @if ($errors->get('f_tanggal_lahir'))
                                                            <ul>
                                                                @foreach ((array) $errors->get('f_tanggal_lahir') as $message)
                                                                    <li class="text-danger">{{ $message }}</li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </div>
                                                    {{-- end f_tanggal_lahir --}}
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    {{-- start f_agama --}}
                                                    <div class="mb-3">
                                                        <label class="form-label">Agama</label>
                                                        <select class="form-select" id="f_agama" type="text"
                                                            name="f_agama" value="{{ old('f_agama') }}" autofocus
                                                            autocomplete="f_agama">
                                                            <option readonly value="">-- Pilih Agama --</option>
                                                            <option value="islam">Islam</option>
                                                            <option value="kristen">Kristen</option>
                                                            <option value="katolik">Katolik</option>
                                                            <option value="hindu">Hindu</option>
                                                            <option value="budha">Budha</option>
                                                            <option value="khonghucu">Khonghucu</option>
                                                        </select>
                                                        <span class="text-danger" id="f_agama-message"></span>
                                                        @if ($errors->get('f_agama'))
                                                            <ul>
                                                                @foreach ((array) $errors->get('f_agama') as $message)
                                                                    <li class="text-danger">{{ $message }}</li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </div>
                                                    {{-- end f_agama --}}
                                                </div>
                                                <div class="col-md-6">
                                                    {{-- start f_no_wa --}}
                                                    <div class="mb-3">
                                                        <label class="form-label">No. Wa</label>
                                                        <input class="form-control" id="f_no_wa" type="text"
                                                            name="f_no_wa" value="{{ old('f_no_wa') }}" autofocus
                                                            autocomplete="f_no_wa">
                                                        <span class="text-danger" id="f_no_wa-message"></span>
                                                        @if ($errors->get('f_no_wa'))
                                                            <ul>
                                                                @foreach ((array) $errors->get('f_no_wa') as $message)
                                                                    <li class="text-danger">{{ $message }}</li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </div>
                                                    {{-- end f_no_wa --}}
                                                </div>
                                            </div>
                                        </div>


                                        {{-- 2 --}}
                                        <div class="d-none border-top border-secondary pt-3">
                                            <h4 class="text-black mb-10">Pangkat dan Satuan Kerja</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    {{-- start jabatan --}}
                                                    <div class="mb-3">
                                                        <label class="form-label">Jabatan</label>
                                                        <select class="form-select" id="jabatan" type="text"
                                                            name="jabatan" value="{{ old('jabatan') }}" autofocus
                                                            autocomplete="jabatan">
                                                            <option readonly value="">-- Pilih Jabatan --
                                                            </option>
                                                            @forelse($jabatan as $row)
                                                                <option value="{{ $row->id }}">
                                                                    {{ $row->j_nama }}
                                                                </option>
                                                            @empty
                                                                <option readonly value=""> Data masih kosong
                                                                </option>
                                                            @endforelse
                                                        </select>
                                                        @if ($errors->get('jabatan'))
                                                            <ul>
                                                                @foreach ((array) $errors->get('jabatan') as $message)
                                                                    <li class="text-danger">{{ $message }}</li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </div>
                                                    {{-- end jabatan --}}
                                                </div>
                                                <div class="col-md-6">
                                                    {{-- start pangkat --}}
                                                    <div class="mb-3">
                                                        <label class="form-label">Instansi</label>
                                                        <select class="form-select" id="instansi" type="text"
                                                            name="instansi" value="{{ old('instansi') }}" autofocus
                                                            autocomplete="instansi">
                                                            <option readonly value="">-- Pilih Instansi --
                                                            </option>
                                                            @forelse($instansi as $row)
                                                                <option value="{{ $row->id }}">
                                                                    {{ $row->i_nama }}
                                                                </option>
                                                            @empty
                                                                <option readonly value=""> Data masih kosong
                                                                </option>
                                                            @endforelse
                                                        </select>
                                                        @if ($errors->get('instansi'))
                                                            <ul>
                                                                @foreach ((array) $errors->get('instansi') as $message)
                                                                    <li class="text-danger">{{ $message }}</li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </div>
                                                    {{-- end pangkat --}}
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    {{-- start pangkat --}}
                                                    <div class="mb-3">
                                                        <label class="form-label">Pangkat/Golongan</label>
                                                        <select class="form-select" id="golongan" type="text"
                                                            name="golongan" value="{{ old('golongan') }}" autofocus
                                                            autocomplete="golongan">
                                                            <option readonly value="">-- Pilih Golongan --
                                                            </option>
                                                            @forelse($golongan as $row)
                                                                <option value="{{ $row->id }}">
                                                                    {{ $row->g_nama }}
                                                                </option>
                                                            @empty
                                                                <option readonly value=""> Data masih kosong
                                                                </option>
                                                            @endforelse
                                                        </select>
                                                        @if ($errors->get('golongan'))
                                                            <ul>
                                                                @foreach ((array) $errors->get('golongan') as $message)
                                                                    <li class="text-danger">{{ $message }}</li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </div>
                                                    {{-- end pangkat --}}
                                                </div>
                                                <div class="col-md-6">
                                                    {{-- start f_unit_kerja --}}
                                                    <div class="mb-3">
                                                        <label for="f_unit_kerja" class="form-label">Unit
                                                            Kerja</label>
                                                        <input id="f_unit_kerja" type="text" name="f_unit_kerja"
                                                            value="{{ old('f_unit_kerja') }}" autofocus
                                                            autocomplete="f_unit_kerja" class="form-control">
                                                    </div>
                                                    @if ($errors->get('f_unit_kerja'))
                                                        <ul>
                                                            @foreach ((array) $errors->get('f_unit_kerja') as $message)
                                                                <li class="text-danger">{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    {{-- end f_unit_kerja --}}
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3">
                                                    {{-- start keahlian --}}
                                                    <label for="keahlian" class="form-label">Keahlian</label>
                                                    <select id="keahlian" type="text" name="keahlian"
                                                        value="{{ old('keahlian') }}" autofocus
                                                        autocomplete="keahlian" class="form-control">
                                                        <option value="" selected disabled>-- PILIH KEAHLIAN --
                                                        </option>
                                                        @foreach ($keahlian as $row)
                                                            <option value="{{ $row->id }}">{{ $row->k_nama }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    {{-- end keahlian --}}
                                                </div>
                                                @if ($errors->get('keahlian'))
                                                    <ul>
                                                        @foreach ((array) $errors->get('keahlian') as $message)
                                                            <li class="text-danger">{{ $message }}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </div>
                                        </div>

                                        {{-- 3 --}}
                                        <div class="d-none border-top border-secondary pt-3">
                                            <h4 class="text-black mb-10">Riwayat Pendidikan</h4>
                                            <div class="row">
                                                {{-- start f_pendidikan_terakhir --}}
                                                <div class="mb-3">
                                                    <label for="f_pendidikan_terakhir" class="form-label">Pendidikan
                                                        Terakhir</label>
                                                    <select id="f_pendidikan_terakhir" name="f_pendidikan_terakhir"
                                                        class="form-control"
                                                        value="{{ old('f_pendidikan_terakhir') }}" autofocus
                                                        autocomplete="f_pendidikan_terakhir" class="form-control">
                                                        <option value="" disabled selected>-- PILIH PENDIDIKAN
                                                            TERAKHIR --</option>
                                                        <option value="SMA">SMA</option>
                                                        <option value="D3">D3</option>
                                                        <option value="D4\S1">D4\S1</option>
                                                        <option value="S2">S2</option>
                                                        <option value="S3">S3</option>
                                                    </select>
                                                </div>
                                                @if ($errors->get('f_pendidikan_terakhir'))
                                                    <ul>
                                                        @foreach ((array) $errors->get('f_pendidikan_terakhir') as $message)
                                                            <li class="text-danger">{{ $message }}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                {{-- end f_pendidikan_terakhir --}}
                                            </div>
                                            <div class="row">
                                                {{-- start f_universitas --}}
                                                <div class="mb-3">
                                                    <label class="form-label">Universitas</label>
                                                    <select class="form-select" id="f_universitas" type="text"
                                                        name="f_universitas" value="{{ old('f_universitas') }}"
                                                        autofocus autocomplete="f_universitas">
                                                        <option readonly value="">-- Pilih Universitas --
                                                        </option>
                                                    </select>
                                                    @if ($errors->get('f_universitas'))
                                                        <ul>
                                                            @foreach ((array) $errors->get('f_universitas') as $message)
                                                                <li class="text-danger">{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </div>
                                                {{-- end f_universitas --}}
                                            </div>
                                        </div>

                                        {{-- 4 --}}
                                        <div class="d-none border-top border-secondary pt-3">
                                            <h4 class="text-black mb-10">Tempat Tinggal</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    {{-- start provinsi --}}
                                                    <div class="mb-3">
                                                        <label for="provinsi" class="form-label">Provinsi</label>
                                                        <select id="provinsi" type="text" name="provinsi"
                                                            value="{{ old('provinsi') }}" autofocus
                                                            class="form-control">
                                                            <option disabled selected value="">-- Pilih Provinsi
                                                                --</option>
                                                        </select>
                                                    </div>
                                                    @if ($errors->get('provinsi'))
                                                        <ul>
                                                            @foreach ((array) $errors->get('provinsi') as $message)
                                                                <li class="text-danger">{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    {{-- end provinsi --}}
                                                </div>
                                                <div class="col-md-6">
                                                    {{-- start kabupaten --}}
                                                    <div class="mb-3">
                                                        <label for="kabupaten" class="form-label">Kabupaten</label>
                                                        <select id="kabupaten" type="text" name="kabupaten"
                                                            value="{{ old('kabupaten') }}" autofocus disabled
                                                            class="form-control">
                                                            <option disabled selected value="">-- Pilih Kabupaten
                                                                --</option>
                                                        </select>
                                                    </div>
                                                    @if ($errors->get('kabupaten'))
                                                        <ul>
                                                            @foreach ((array) $errors->get('kabupaten') as $message)
                                                                <li class="text-danger">{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    {{-- end kabupaten --}}
                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    {{-- start kecamatan --}}
                                                    <div class="mb-3">
                                                        <label for="kecamatan" class="form-label">Kecamatan</label>
                                                        <select id="kecamatan" type="text" name="kecamatan"
                                                            value="{{ old('kecamatan') }}" autofocus disabled
                                                            class="form-control">
                                                            <option disabled selected value="">-- Pilih Kecamatan
                                                                --</option>
                                                        </select>
                                                    </div>
                                                    @if ($errors->get('kecamatan'))
                                                        <ul>
                                                            @foreach ((array) $errors->get('kecamatan') as $message)
                                                                <li class="text-danger">{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    {{-- end kecamatan --}}
                                                </div>
                                                <div class="col-md-6">
                                                    {{-- start kelurahan --}}
                                                    <div class="mb-3">
                                                        <label for="kelurahan" class="form-label">Kelurahan</label>
                                                        <select id="kelurahan" type="text" name="kelurahan"
                                                            value="{{ old('kelurahan') }}" autofocus disabled
                                                            class="form-control">
                                                            <option disabled selected value="">-- Pilih Kelurahan
                                                                --</option>
                                                        </select>
                                                    </div>
                                                    @if ($errors->get('kelurahan'))
                                                        <ul>
                                                            @foreach ((array) $errors->get('kelurahan') as $message)
                                                                <li class="text-danger">{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    {{-- end kelurahan --}}
                                                </div>


                                            </div>



                                            <div class="mb-3">
                                                <label class="form-label">Alamat Lengkap</label>
                                                <input class="form-control" id="f_alamat" type="text"
                                                    name="f_alamat" value="{{ old('f_alamat') }}" autofocus
                                                    autocomplete="f_alamat">
                                                @if ($errors->get('f_alamat'))
                                                    <ul>
                                                        @foreach ((array) $errors->get('f_alamat') as $message)
                                                            <li class="text-danger">{{ $message }}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </div>
                                        </div>

                                        {{-- 5 --}}
                                        <div class="d-none border-top border-secondary pt-3">
                                            <h4 class="text-black mb-10">Pembayaran</h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    {{-- start f_bukti_pembayaran --}}
                                                    <div class="mb-3">
                                                        <label for="f_bukti_pembayaran" class="form-label">Bukti
                                                            Pembayaran</label>
                                                        <input id="f_bukti_pembayaran" type="file"
                                                            name="f_bukti_pembayaran" autofocus
                                                            autocomplete="f_bukti_pembayaran" class="form-control">
                                                    </div>
                                                    @if ($errors->get('f_bukti_pembayaran'))
                                                        <ul>
                                                            @foreach ((array) $errors->get('f_bukti_pembayaran') as $message)
                                                                <li class="text-danger">{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    {{-- end f_bukti_pembayaran --}}
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="d-absoluet button-0">
                                        <div class="d-flex justify-content-between p-2">
                                            <span id="back" class="btn btn-primary">Kembali</span>
                                            <span id="navigator-count">1/2</span>
                                            <span id="next" class="btn btn-primary">Lanjut</span>
                                        </div>
                                        {{-- <button class="btn btn-primary w-100 py-8 mb-4 rounded-2">Masuk</button> --}}
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="fs-4 mb-0 fw-medium">Sudah menjadi anggota?</p>
                                            <a class="text-primary fw-medium ms-2"
                                                href="{{ route('login') }}">Masuk</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function handleColorTheme(e) {
                document.documentElement.setAttribute("data-color-theme", e);
            }
        </script>
        <button
            class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
            type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample">
            <i class="icon ti ti-settings fs-7"></i>
        </button>

        <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
                    Settings
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body h-n80" data-simplebar>
                <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout"
                        autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2" for="light-layout">
                        <i class="icon ti ti-brightness-up fs-7 me-2"></i>Light
                    </label>

                    <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout"
                        autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary rounded-2" for="dark-layout">
                        <i class="icon ti ti-moon fs-7 me-2"></i>Dark
                    </label>
                </div>

                <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <input type="radio" class="btn-check" name="direction-l" id="ltr-layout"
                        autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary" for="ltr-layout">
                        <i class="icon ti ti-text-direction-ltr fs-7 me-2"></i>LTR
                    </label>

                    <input type="radio" class="btn-check" name="direction-l" id="rtl-layout"
                        autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary" for="rtl-layout">
                        <i class="icon ti ti-text-direction-rtl fs-7 me-2"></i>RTL
                    </label>
                </div>

                <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

                <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
                    <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme"
                        autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                        onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-title="BLUE_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme"
                        autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                        onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-title="AQUA_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme"
                        autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                        onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-title="PURPLE_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout"
                        autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                        onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-title="GREEN_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout"
                        autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                        onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-title="CYAN_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout"
                        autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                        onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-title="ORANGE_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>
                </div>

                <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <div>
                        <input type="radio" class="btn-check" name="page-layout" id="vertical-layout"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary" for="vertical-layout">
                            <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Vertical
                        </label>
                    </div>
                    <div>
                        <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary" for="horizontal-layout">
                            <i class="icon ti ti-layout-navbar fs-7 me-2"></i>Horizontal
                        </label>
                    </div>
                </div>

                <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>

                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <input type="radio" class="btn-check" name="layout" id="boxed-layout" autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary" for="boxed-layout">
                        <i class="icon ti ti-layout-distribute-vertical fs-7 me-2"></i>Boxed
                    </label>

                    <input type="radio" class="btn-check" name="layout" id="full-layout" autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary" for="full-layout">
                        <i class="icon ti ti-layout-distribute-horizontal fs-7 me-2"></i>Full
                    </label>
                </div>

                <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <a href="javascript:void(0)" class="fullsidebar">
                        <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary" for="full-sidebar">
                            <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Full
                        </label>
                    </a>
                    <div>
                        <input type="radio" class="btn-check " name="sidebar-type" id="mini-sidebar"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary" for="mini-sidebar">
                            <i class="icon ti ti-layout-sidebar fs-7 me-2"></i>Collapse
                        </label>
                    </div>
                </div>

                <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <input type="radio" class="btn-check" name="card-layout" id="card-with-border"
                        autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary" for="card-with-border">
                        <i class="icon ti ti-border-outer fs-7 me-2"></i>Border
                    </label>

                    <input type="radio" class="btn-check" name="card-layout" id="card-without-border"
                        autocomplete="off" />
                    <label class="btn p-9 btn-outline-primary" for="card-without-border">
                        <i class="icon ti ti-border-none fs-7 me-2"></i>Shadow
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <!-- Import Js Files -->
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.init.js') }}"></script>
    <script src="{{ asset('assets/js/theme/theme.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.min.js') }}"></script>

    {{-- Handle Group Form --}}
    <script src="{{ asset('assets/js/feature/registrationForm/registrationForm.js') }}"></script>
    {{-- Handle Select2 Form --}}
    <script src="{{ asset('assets/js/feature/registrationForm/registrationSelect2.js') }}"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
