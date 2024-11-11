@extends('frontend.layouts.dashboard.admin.main')
@section('contents')
    <x-breadcrumb-dashboard title="Pendaftaran" />
    @session('success')
        <x-alert-dashboard :error="false">{{ $value }}</x-alert-dashboard>
    @endsession
    @session('error')
        <x-alert-dashboard :error="true">{{ $value }}</x-alert-dashboard>
    @endsession
    <div class="container-fluid">
        {{-- <div class="card p-4">
            @php
                $list = [
                    [
                        'field' => 'Nama Jabatan',
                        'name' => 'j_nama',
                        'type' => 'text',
                    ],
                ];
            @endphp
            <x-form-dashboard method="post" title="Tambah Jabatan" :url="route('admin.dashboard.jabatan.store')" :listForm="$list" />
        </div> --}}
        <div class="card p-4">
            <h5>Data Pendaftar</h5>
            <div class="table-responsive">
                {{ $dataTable->table() }}
            </div>
        </div>


    </div>
@endsection

@section('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endsection
