@extends('frontend.layouts.dashboard.admin.main')
@section('contents')
    <x-breadcrumb-dashboard title="Instansi" />
    @session('success')
        <x-alert-dashboard :error="false">{{ $value }}</x-alert-dashboard>
    @endsession
    @session('error')
        <x-alert-dashboard :error="true">{{ $value }}</x-alert-dashboard>
    @endsession
    <div class="container-fluid">
        <div class="card p-4">
            @php
                $list = [
                    [
                        'field' => 'Nama Instansi',
                        'name' => 'i_nama',
                        'type' => 'text',
                    ],
                ];
            @endphp
            <x-form-dashboard method="post" title="Tambah Instansi" :url="route('admin.dashboard.instansi.store')" :listForm="$list" />
        </div>
        <div class="card p-4">
            <h5>Data Instansi</h5>
            {{ $dataTable->table() }}
        </div>


    </div>
@endsection

@section('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endsection
