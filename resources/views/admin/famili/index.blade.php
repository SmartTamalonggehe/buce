@php
$folder = 'famili';
@endphp

@extends('admin.layouts.simple.master')
@section('title', 'Famili')

@section($folder, 'active')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection

@section('style')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="d-inline">Data @yield('judul')</h5>
                        <button class="btn btn-primary" id="tambah">Tambah Data</button>
                        <span>Silahkan Menambah, Merubah dan Menghapus Data</span>
                    </div>
                    <div class="card-body">
                        <div id="tampil"></div>
                    </div>
                </div>
            </div>
            <!-- Zero Configuration  Ends-->
        </div>
    </div>
@endsection

@section('script')
    {{-- My Script --}}
    <script src="{{ asset('my_js/load_data.js') }}"></script>
    <script src="{{ asset('my_js/add_data.js') }}"></script>
@endsection
