@extends('admin.layouts.authentication.master')
@section('title', 'Login')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card">
                    <div>
                        <div class="login-main">
                            <form class="theme-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <h4>Login untuk admin</h4>
                                <p>Silahkan Masukan Email dan Password</p>
                                <div class="form-group">
                                    <label class="col-form-label">Email</label>
                                    <input class="form-control" name="email" type="email" required=""
                                        placeholder="Masukan Email">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input class="form-control" name="password" type="password" name="login[password]"
                                        required="" placeholder="">
                                    <div class="show-hide"><span class="show"> </span></div>
                                </div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                                </div>
                                <a href="{{ url('/') }}">
                                    <h6 class="text-muted mt-4 text-center">Kembali ke Halaman Utama </h6>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
