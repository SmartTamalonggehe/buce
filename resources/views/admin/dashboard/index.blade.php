@extends('admin.layouts.default')
@section('judul', 'Dashboard')
@section('dashboard', 'active')
@section('content')
    <div class="col s12 m8 l12">
        <div id="revenue-chart" class="card animate fadeUp">
            <div class="card-content">
                <h4 class="header mt-0">
                    REVENUE FOR 2020
                    <span class="purple-text small text-darken-1 ml-1">
                        <i class="material-icons">keyboard_arrow_up</i> 15.58 %</span>
                    <a
                        class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow right">Details</a>
                </h4>
                <div class="row">
                    <div class="col s12">
                        <div class="yearly-revenue-chart">
                            <canvas id="thisYearRevenue" class="firstShadow" height="350"></canvas>
                            <canvas id="lastYearRevenue" height="350"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
