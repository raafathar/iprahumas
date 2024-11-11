@extends('frontend.layouts.dashboard.admin.main')
@section('contents')
    <x-breadcrumb-dashboard title="Data Anggota" />
    @session('success')
        <x-alert-dashboard :error="false">{{ $value }}</x-alert-dashboard>
    @endsession
    @session('error')
        <x-alert-dashboard :error="true">{{ $value }}</x-alert-dashboard>
    @endsession
    <div class="container-fluid">
        <div class="card card-body p-4">
            <div class="overflow-auto">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endsection
