@php
$folder = 'famili';
@endphp

@extends('admin.layouts.default')
@section('judul', 'Famili')
@section($folder, 'active')
@section('css')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/data-tables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/data-tables/css/select.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/data-tables.css') }}">

@endsection
@section('content')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Scroll - vertical And Horizontal
                    </h4>
                    <div class="row">
                        <div class="col s12">
                            <div id="route" style="display: none">famili</div>
                            <div id="tampil"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- Form --}}
@include("admin.$folder.form")
@section('script')
    {{-- My Script --}}
    <script src="{{ asset('my_js/load_data.js') }}"></script>
    {{-- <script src="{{ asset('my_js/add_data.js') }}"></script> --}}

@endsection
