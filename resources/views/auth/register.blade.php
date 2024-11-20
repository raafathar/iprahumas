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
    <!-- Preloader -->
    <div class="preloader">
        <img src="../assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper" class="auth-customizer-none">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-xl-7 col-xxl-7"
                        style="background-image: url('../assets/images/frontend-pages/bg-sejarah2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: left;">
                        <a href="../main/index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                            <img src="../assets/images/logos/logo.png" class="dark-logo" alt="Logo-Dark"
                                height="58" />
                            <img src="../assets/images/logos/logo.png" class="light-logo" alt="Logo-light"
                                height="58" />
                        </a>
                    </div>
                    <div class="col-xl-5 col-xxl-5">
                        <div class="min-vh-100 bg-body row justify-content-center align-items-center p-4">
                            <div class="col-sm-8 col-md-6 col-xl-7">
                                <h2 class="fs-7 fw-bolder mt-3">Pendaftaran anggota </h2>
                                <span id="navigator-count"></span>
                                <form method="POST" id="register-form" action="{{ route('register') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div id="form-container">
                                        <div class="d-none pt-3">
                                            <div class="row">
                                                <div class="col-12">
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
                                                <div class="col-12">
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
                                                <div class="col-12">
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
                                                <div class="col-12">
                                                    {{-- start f_tanggal_lahir --}}
                                                    <div class="mb-3">
                                                        <label class="form-label">Tanggal Lahir</label>
                                                        <input class="form-control" id="f_tanggal_lahir" type="date"
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
                                                <div class="col-12">
                                                    {{-- start f_agama --}}
                                                    <div class="mb-3">
                                                        <label class="form-label">Agama</label>
                                                        <select class="form-select" id="f_agama" name="f_agama"
                                                            autofocus autocomplete="f_agama">
                                                            <option readonly value="">-- Pilih Agama --</option>
                                                            <option value="islam"
                                                                {{ old('f_agama') == 'islam' ? 'selected' : '' }}>Islam
                                                            </option>
                                                            <option value="kristen"
                                                                {{ old('f_agama') == 'kristen' ? 'selected' : '' }}>
                                                                Kristen</option>
                                                            <option value="katolik"
                                                                {{ old('f_agama') == 'katolik' ? 'selected' : '' }}>
                                                                Katolik</option>
                                                            <option value="hindu"
                                                                {{ old('f_agama') == 'hindu' ? 'selected' : '' }}>Hindu
                                                            </option>
                                                            <option value="budha"
                                                                {{ old('f_agama') == 'budha' ? 'selected' : '' }}>Budha
                                                            </option>
                                                            <option value="khonghucu"
                                                                {{ old('f_agama') == 'khonghucu' ? 'selected' : '' }}>
                                                                Khonghucu</option>
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
                                                <div class="col-12">
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
                                        <div class="d-none">
                                            <div class="row">
                                                <div class="col-12">
                                                    {{-- start jabatan --}}
                                                    <div class="mb-3">
                                                        <label class="form-label">Jabatan</label>
                                                        <select class="form-select" id="jabatan" name="jabatan"
                                                            autofocus autocomplete="jabatan">
                                                            <option readonly value="">-- Pilih Jabatan --
                                                            </option>
                                                            @forelse($jabatan as $row)
                                                                <option value="{{ $row->id }}"
                                                                    {{ old('jabatan') == $row->id ? 'selected' : '' }}>
                                                                    {{ $row->j_nama }}
                                                                </option>
                                                            @empty
                                                                <option readonly value="">Data masih kosong
                                                                </option>
                                                            @endforelse
                                                        </select>

                                                        <span class="text-danger" id="jabatan_message"></span>
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
                                                <div class="col-12">
                                                    {{-- start pangkat --}}
                                                    <div class="mb-3">
                                                        <label class="form-label">Instansi</label>
                                                        <select class="form-select" id="instansi" name="instansi"
                                                            autofocus autocomplete="instansi">
                                                            <option readonly value="">-- Pilih Instansi --
                                                            </option>
                                                            @forelse($instansi as $row)
                                                                <option value="{{ $row->id }}"
                                                                    {{ old('instansi') == $row->id ? 'selected' : '' }}>
                                                                    {{ $row->i_nama }}
                                                                </option>
                                                            @empty
                                                                <option readonly value="">Data masih kosong
                                                                </option>
                                                            @endforelse
                                                        </select>

                                                        <span class="text-danger" id="instansi_message"></span>
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
                                                <div class="col-12">
                                                    {{-- start pangkat --}}
                                                    <div class="mb-3">
                                                        <label class="form-label">Pangkat/Golongan</label>
                                                        <select class="form-select" id="golongan" name="golongan"
                                                            autofocus autocomplete="golongan">
                                                            <option readonly value="">-- Pilih Golongan --
                                                            </option>
                                                            @forelse($golongan as $row)
                                                                <option value="{{ $row->id }}"
                                                                    {{ old('golongan') == $row->id ? 'selected' : '' }}>
                                                                    {{ $row->g_nama }}
                                                                </option>
                                                            @empty
                                                                <option readonly value="">Data masih kosong
                                                                </option>
                                                            @endforelse
                                                        </select>
                                                        <span class="text-danger" id="golongan_message"></span>
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
                                                <div class="col-12">
                                                    {{-- start f_unit_kerja --}}
                                                    <div class="mb-3">
                                                        <label for="f_unit_kerja" class="form-label">Unit
                                                            Kerja</label>
                                                        <input id="f_unit_kerja" type="text" name="f_unit_kerja"
                                                            value="{{ old('f_unit_kerja') }}" autofocus
                                                            autocomplete="f_unit_kerja" class="form-control">
                                                    </div>
                                                    <span class="text-danger" id="f_unit_kerja_message"></span>
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
                                                    <select id="keahlian" name="keahlian" autofocus
                                                        autocomplete="keahlian" class="form-control">
                                                        <option value="" selected disabled>-- PILIH KEAHLIAN --
                                                        </option>
                                                        @foreach ($keahlian as $row)
                                                            <option value="{{ $row->id }}"
                                                                {{ old('keahlian') == $row->id ? 'selected' : '' }}>
                                                                {{ $row->k_nama }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    {{-- end keahlian --}}
                                                </div>
                                                <span class="text-danger" id="keahlian_message"></span>
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
                                        <div class="d-none">
                                            <div class="row">
                                                {{-- start f_pendidikan_terakhir --}}
                                                <div class="mb-3">
                                                    <label for="f_pendidikan_terakhir" class="form-label">Pendidikan
                                                        Terakhir</label>
                                                    <select id="f_pendidikan_terakhir" name="f_pendidikan_terakhir"
                                                        class="form-control" autofocus
                                                        autocomplete="f_pendidikan_terakhir">
                                                        <option value="" disabled selected>-- PILIH PENDIDIKAN
                                                            TERAKHIR --</option>
                                                        <option value="SMA"
                                                            {{ old('f_pendidikan_terakhir') == 'SMA' ? 'selected' : '' }}>
                                                            SMA</option>
                                                        <option value="D3"
                                                            {{ old('f_pendidikan_terakhir') == 'D3' ? 'selected' : '' }}>
                                                            D3</option>
                                                        <option value="D4/S1"
                                                            {{ old('f_pendidikan_terakhir') == 'D4/S1' ? 'selected' : '' }}>
                                                            D4/S1</option>
                                                        <option value="S2"
                                                            {{ old('f_pendidikan_terakhir') == 'S2' ? 'selected' : '' }}>
                                                            S2</option>
                                                        <option value="S3"
                                                            {{ old('f_pendidikan_terakhir') == 'S3' ? 'selected' : '' }}>
                                                            S3</option>
                                                    </select>

                                                </div>
                                                <span class="text-danger" id="f_pendidikan_terakhir_message"></span>
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
                                                    <span class="text-danger" id="f_universitas_message"></span>
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
                                        <div class="d-none">
                                            <div class="row">
                                                <div class="col-12">
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
                                                    <span class="text-danger" id="provinsi_message"></span>
                                                    @if ($errors->get('provinsi'))
                                                        <ul>
                                                            @foreach ((array) $errors->get('provinsi') as $message)
                                                                <li class="text-danger">{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    {{-- end provinsi --}}
                                                </div>
                                                <div class="col-12">
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
                                                    <span class="text-danger" id="kabupaten_message"></span>
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
                                                <div class="col-12">
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
                                                    <span class="text-danger" id="kecamatan_message"></span>
                                                    @if ($errors->get('kecamatan'))
                                                        <ul>
                                                            @foreach ((array) $errors->get('kecamatan') as $message)
                                                                <li class="text-danger">{{ $message }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    {{-- end kecamatan --}}
                                                </div>
                                                <div class="col-12">
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
                                                    <span class="text-danger" id="kelurahan_message"></span>
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
                                                <span class="text-danger" id="f_alamat_message"></span>
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
                                        <div class="d-none">
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
                                                    <span class="text-danger" id="f_bukti_pembayaran_message"></span>
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
                                    <div class="d-absoluet button-0 mt-2">
                                        <div class="d-flex justify-content-end gap-3">
                                            <span id="back" class="btn btn-outline-primary w-100">Kembali</span>
                                            <span id="next" class="btn btn-primary w-100"></span>
                                        </div>
                                        <p class="mt-3 fs-3">
                                            Dengan melakukan pendaftaran, saya setuju dengan Kebijakan Privasi dan
                                            Syarat & Ketentuan Iprahumas.
                                        </p>
                                        <p class="fs-4 mb-0 text-center mt-3">
                                            Sudah memiliki akun?
                                            <a class="text-primary fw-bold" href="{{ route('login') }}">Masuk</a>
                                        </p>
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
