@extends('frontend.layouts.dashboard.admin.main')
@section('contents')
    <x-breadcrumb-dashboard title="Golongan" />
    @session('success')
        <x-alert-dashboard :error="false">{{ $value }}</x-alert-dashboard>
    @endsession
    @session('error')
        <x-alert-dashboard :error="true">{{ $value }}</x-alert-dashboard>
    @endsession
    <div class="container-fluid p-0">
        <div class="card p-4">
            @php
                $list = [
                    [
                        'field' => 'Nama Golongan',
                        'name' => 'g_nama',
                        'type' => 'text',
                    ],
                ];
            @endphp
            <x-form-dashboard method="post" title="Tambah Instansi" :url="route('admin.dashboard.golongan.store')" :listForm="$list" />
        </div>
        <div class="card p-4">
            <h5>Data Golongan</h5>
            {{ $dataTable->table() }}
        </div>


    </div>
@endsection

@section('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endsection
