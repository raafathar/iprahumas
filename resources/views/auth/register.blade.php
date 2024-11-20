<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />

    <!-- Core Css -->
    <link rel="stylesheet" href="../assets/css/styles.css" />

    <title>Modernize Bootstrap Admin</title>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="../assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
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
                                <h2 class="mb-10 fs-7 fw-bolder">Daftar menjadi anggota</h2>
                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                {{-- start username --}}
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input id="username" type="text" name="username"
                                                        value="{{ old('username') }}" autofocus autocomplete="username"
                                                        class="form-control">
                                                </div>
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
                                                {{-- start pangkat --}}
                                                <div class="mb-3">
                                                    <label class="form-label">Pangkat/Golongan</label>
                                                    <select class="form-select" id="golongan" name="golongan" required
                                                        value="{{ old('golongan') }}" autofocus autocomplete="golongan">
                                                        <option readonly>-- Pilih Golongan --</option>
                                                        @forelse($golongan as $row)
                                                            <option value="{{ $row->id }}">{{ $row->g_nama }}
                                                            </option>
                                                        @empty
                                                            <option readonly> Data masih kosong</option>
                                                        @endforelse
                                                    </select>
                                                </div>
                                                @if ($errors->get('golongan'))
                                                    <ul>
                                                        @foreach ((array) $errors->get('golongan') as $message)
                                                            <li class="text-danger">{{ $message }}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                {{-- end pangkat --}}
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                {{-- start jabatan --}}
                                                <div class="mb-3">
                                                    <label class="form-label">Jabatan</label>
                                                    <select class="form-select" id="jabatan" type="text"
                                                        name="jabatan" value="{{ old('jabatan') }}" autofocus
                                                        autocomplete="jabatan">
                                                        <option readonly>-- Pilih Jabatan --</option>
                                                        @forelse($jabatan as $row)
                                                            <option value="{{ $row->id }}">{{ $row->j_nama }}
                                                            </option>
                                                        @empty
                                                            <option readonly> Data masih kosong</option>
                                                        @endforelse
                                                    </select>
                                                </div>
                                                @if ($errors->get('jabatan'))
                                                    <ul>
                                                        @foreach ((array) $errors->get('jabatan') as $message)
                                                            <li class="text-danger">{{ $message }}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                {{-- end jabatan --}}
                                            </div>
                                            <div class="col-md-6">
                                                {{-- start pangkat --}}
                                                <div class="mb-3">
                                                    <label class="form-label">Instansi</label>
                                                    <select class="form-select" id="instansi" type="text"
                                                        name="instansi" value="{{ old('instansi') }}" autofocus
                                                        autocomplete="instansi">
                                                        <option readonly>-- Pilih Instansi --</option>
                                                        @forelse($instansi as $row)
                                                            <option value="{{ $row->id }}">{{ $row->i_nama }}
                                                            </option>
                                                        @empty
                                                            <option readonly> Data masih kosong</option>
                                                        @endforelse
                                                    </select>
                                                </div>
                                                @if ($errors->get('instansi'))
                                                    <ul>
                                                        @foreach ((array) $errors->get('instansi') as $message)
                                                            <li class="text-danger">{{ $message }}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                {{-- end pangkat --}}
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                {{-- start f_unit_kerja --}}
                                                <div class="mb-3">
                                                    <label for="f_unit_kerja" class="form-label">Unit Kerja</label>
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
                                            <div class="col-md-6">
                                                {{-- start f_no_wa --}}
                                                <div class="mb-3">
                                                    <label for="f_no_wa" class="form-label">No Hp/WA</label>
                                                    <input id="f_no_wa" type="text" name="f_no_wa"
                                                        value="{{ old('f_no_wa') }}" autofocus autocomplete="f_no_wa"
                                                        class="form-control">
                                                </div>
                                                @if ($errors->get('f_no_wa'))
                                                    <ul>
                                                        @foreach ((array) $errors->get('f_no_wa') as $message)
                                                            <li class="text-danger">{{ $message }}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                {{-- end f_no_wa --}}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                {{-- start f_jenis_kartu --}}
                                                <div class="mb-3">
                                                    <label for="f_jenis_kartu" class="form-label">Jenis Kartu</label>
                                                    <select id="f_jenis_kartu" name="f_jenis_kartu"
                                                        value="{{ old('f_jenis_kartu') }}" autofocus
                                                        autocomplete="f_jenis_kartu" class="form-control">
                                                        <option value="EMONEY">EMONEY</option>
                                                        <option value="FLAZZ">FLAZZ</option>
                                                    </select>
                                                </div>
                                                @if ($errors->get('f_jenis_kartu'))
                                                    <ul>
                                                        @foreach ((array) $errors->get('f_jenis_kartu') as $message)
                                                            <li class="text-danger">{{ $message }}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                {{-- end f_jenis_kartu --}}
                                            </div>
                                            <div class="col-md-6">
                                                {{-- start f_alamat --}}
                                                <div class="mb-3">
                                                    <label for="f_alamat" class="form-label">Alamat Pengirim
                                                        Kartu</label>
                                                    <input id="f_alamat" type="text" name="f_alamat"
                                                        value="{{ old('f_alamat') }}" autofocus
                                                        autocomplete="f_alamat" class="form-control">
                                                </div>
                                                @if ($errors->get('f_alamat'))
                                                    <ul>
                                                        @foreach ((array) $errors->get('f_alamat') as $message)
                                                            <li class="text-danger">{{ $message }}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                {{-- end f_alamat --}}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                {{-- start f_bukti_pembayaran --}}
                                                <div class="mb-3">
                                                    <label for="f_bukti_pembayaran" class="form-label">Bukti
                                                        Pembayaran</label>
                                                    <input id="f_bukti_pembayaran" type="file"
                                                        name="f_bukti_pembayaran"
                                                        value="{{ old('f_bukti_pembayaran') }}" autofocus
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
                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                {{-- start password --}}
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input id="password" type="password" name="password"
                                                        value="{{ old('password') }}" autofocus
                                                        autocomplete="password" class="form-control">
                                                </div>
                                                @if ($errors->get('password'))
                                                    <ul>
                                                        @foreach ((array) $errors->get('password') as $message)
                                                            <li class="text-danger">{{ $message }}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                {{-- end password --}}
                                            </div>
                                            <div class="col-md-6">
                                                {{-- start password_confirmation --}}
                                                <div class="mb-3">
                                                    <label for="password_confirmation" class="form-label">Password
                                                        Confirmation</label>
                                                    <input id="password_confirmation" type="pass"
                                                        name="password_confirmation"
                                                        value="{{ old('password_confirmation') }}" autofocus
                                                        autocomplete="password_confirmation" class="form-control">
                                                </div>
                                                @if ($errors->get('password_confirmation'))
                                                    <ul>
                                                        @foreach ((array) $errors->get('password_confirmation') as $message)
                                                            <li class="text-danger">{{ $message }}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                {{-- end password_confirmation --}}
                                            </div>
                                        </div>

                                    </div>
                                    <button class="btn btn-primary w-100 py-8 mb-4 rounded-2">Masuk</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-medium">Sudah menjadi anggota?</p>
                                        <a class="text-primary fw-medium ms-2" href="{{ route('login') }}">Masuk</a>
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
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../assets/js/theme/app.init.js"></script>
    <script src="../assets/js/theme/theme.js"></script>
    <script src="../assets/js/theme/app.min.js"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
