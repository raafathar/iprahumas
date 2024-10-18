<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Nama User -->
        <div>
            <label for="username">
                {{ __('Nama User') }}
            </label>
            <input id="username" type="text" name="username" value="{{ old('username') }}" autofocus
                autocomplete="username">
            @if ($errors->get('username'))
                <ul>
                    @foreach ((array) $errors->get('username') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Email -->
        <div>
            <label for="email">
                {{ __('Email') }}
            </label>
            <input id="email" type="text" name="email" value="{{ old('email') }}" autofocus
                autocomplete="email">
            @if ($errors->get('email'))
                <ul>
                    @foreach ((array) $errors->get('email') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- NIP -->
        <div>
            <label for="NIP">
                {{ __('NIP') }}
            </label>
            <input id="NIP" type="text" name="NIP" value="{{ old('NIP') }}" autofocus
                autocomplete="NIP">
            @if ($errors->get('NIP'))
                <ul>
                    @foreach ((array) $errors->get('NIP') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Golongan -->
        <div>
            <label for="golongan">
                {{ __('Pangkat/Golongan') }}
            </label>
            <select id="golongan" type="text" name="golongan" value="{{ old('golongan') }}" autofocus
                autocomplete="golongan">
                <option readonly>-- Pilih Golongan --</option>
                @forelse($golongan as $row)
                    <option value="{{ $row->id }}">{{ $row->g_nama }}</option>
                @empty
                    <option readonly> Data masih kosong</option>
                @endforelse
            </select>
            @if ($errors->get('golongan'))
                <ul>
                    @foreach ((array) $errors->get('golongan') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Jabatan -->
        <div>
            <label for="jabatan">
                {{ __('Jabatan') }}
            </label>
            <select id="jabatan" type="text" name="jabatan" value="{{ old('jabatan') }}" autofocus
                autocomplete="jabatan">
                <option readonly>-- Pilih Jabatan --</option>
                @forelse($jabatan as $row)
                    <option value="{{ $row->id }}">{{ $row->j_nama }}</option>
                @empty
                    <option readonly> Data masih kosong</option>
                @endforelse
            </select>
            @if ($errors->get('jabatan'))
                <ul>
                    @foreach ((array) $errors->get('jabatan') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Instansi -->
        <div>
            <label for="instansi">
                {{ __('Instansi') }}
            </label>
            <select id="instansi" type="text" name="instansi" value="{{ old('instansi') }}" autofocus
                autocomplete="instansi">
                <option readonly>-- Pilih Instansi --</option>
                @forelse($instansi as $row)
                    <option value="{{ $row->id }}">{{ $row->i_nama }}</option>
                @empty
                    <option readonly> Data masih kosong</option>
                @endforelse
            </select>
            @if ($errors->get('instansi'))
                <ul>
                    @foreach ((array) $errors->get('instansi') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Unit Kerja -->
        <div>
            <label for="f_unit_kerja">
                {{ __('Unit Kerja') }}
            </label>
            <input id="f_unit_kerja" type="text" name="f_unit_kerja" value="{{ old('f_unit_kerja') }}" autofocus
                autocomplete="f_unit_kerja">
            @if ($errors->get('f_unit_kerja'))
                <ul>
                    @foreach ((array) $errors->get('f_unit_kerja') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- No Hp/WA -->
        <div>
            <label for="f_no_wa">
                {{ __('No Hp/WA') }}
            </label>
            <input id="f_no_wa" type="text" name="f_no_wa" value="{{ old('f_no_wa') }}" autofocus
                autocomplete="f_no_wa">
            @if ($errors->get('f_no_wa'))
                <ul>
                    @foreach ((array) $errors->get('f_no_wa') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Jenis Kartu -->
        <div>
            <label for="f_jenis_kartu">
                {{ __('Jenis Kartu') }}
            </label>
            <select id="f_jenis_kartu" name="f_jenis_kartu" value="{{ old('f_jenis_kartu') }}" autofocus
                autocomplete="f_jenis_kartu">
                <option value="EMONEY">EMONEY</option>
                <option value="FLAZZ">FLAZZ</option>
            </select>
            @if ($errors->get('f_jenis_kartu'))
                <ul>
                    @foreach ((array) $errors->get('f_jenis_kartu') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Alamat Pengirim Kartu -->
        <div>
            <label for="f_alamat">
                {{ __('Alamat Pengirim Kartu') }}
            </label>
            <input id="f_alamat" type="text" name="f_alamat" value="{{ old('f_alamat') }}" autofocus
                autocomplete="f_alamat">
            @if ($errors->get('f_alamat'))
                <ul>
                    @foreach ((array) $errors->get('f_alamat') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Bukti Pembayaran -->
        <div>
            <label for="f_bukti_pembayaran">
                {{ __('Bukti Pembayaran') }}
            </label>
            <input id="f_bukti_pembayaran" type="file" name="f_bukti_pembayaran" autofocus
                autocomplete="f_bukti_pembayaran">
            @if ($errors->get('f_bukti_pembayaran'))
                <ul>
                    @foreach ((array) $errors->get('f_bukti_pembayaran') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Password -->
        <div>
            <label for="password">
                {{ __('Kata Kunci') }}
            </label>
            <input id="password" type="text" name="password" value="{{ old('password') }}" autofocus
                autocomplete="password">
            @if ($errors->get('password'))
                <ul>
                    @foreach ((array) $errors->get('password') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Password Konfirmasi -->
        <div>
            <label for="password_confirmation">
                {{ __('Masukkan Kata Kunci Lagi') }}
            </label>
            <input id="password_confirmation" type="text" name="password_confirmation"
                value="{{ old('password_confirmation') }}" autofocus autocomplete="password_confirmation">
            @if ($errors->get('password_confirmation'))
                <ul>
                    @foreach ((array) $errors->get('password_confirmation') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <button>Submit</button>
    </form>
</body>

</html>
