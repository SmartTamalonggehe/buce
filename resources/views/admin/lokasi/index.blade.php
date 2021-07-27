@php
$folder = 'lokasi';
@endphp

@extends('admin.layouts.simple.master')
@section('title', 'Lokasi')

@section($folder, 'active')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/sweetalert2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    {{-- Script Here Maps --}}
    <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-ui.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
@endsection

@section('style')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="peta" style="min-height: 500px; width:100%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="d-inline">Data @yield('title')</h6>
                        <button class="btn btn-primary kanan" id="tambah">Tambah Data</button>
                        <span>Silahkan Menambah, Merubah dan Menghapus Data @yield('title')</span>
                    </div>
                    <div class="card-body">
                        <div id="route" style="display: none"><?= $folder ?></div>
                        <div id="tampil"></div>
                    </div>
                </div>
            </div>
            <!-- Zero Configuration  Ends-->
        </div>
    </div>

@endsection

@include("admin.$folder.form")

@section('script')
    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>

    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
    {{-- My Script --}}
    <script src="{{ asset('my_js/load_data.js') }}"></script>
    <script src="{{ asset('my_js/add_data.js') }}"></script>

    <script>
        $(".select2").select2({
            dropdownParent: $(".tampilModal"),
        });
    </script>

    <script src="{{ asset('my_js/peta.js') }}"></script>
@endsection
