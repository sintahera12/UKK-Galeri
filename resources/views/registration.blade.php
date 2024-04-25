@extends('layout')
@section('content')
<main class="signup-form">
    <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card mt-5">
                        <h3 class="card-header text-center">Register User</h3>
                        <div class="card-body">
                            <form action="{{ route('postsignup') }}" menthod="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Username" id="name" class="form-control" name="name" autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" autofocus>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="string" placeholder="Nama Lengkap" id="nama_lengkap" class="form-control" name="nama lengkap" autofocus>
                                    @if ($errors->has('nama_lengkap'))
                                        <span class="text-danger">{{ $errors->first('nama_lengkap') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Alamat" id="alamat" class="form-control" name="alamat" autofocus>
                                    @if ($errors->has('alamat'))
                                        <span class="text-danger">{{ $errors->first('alamat') }}</span>
                                    @endif
                                </div>
                                <!-- <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>  -->
                                <div class="d-grid mx-auto">
                                     <button type="submit" class="btn-dark btn-block">Daftar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</main>