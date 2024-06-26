@extends('layout')
@section('content')
<main class="login-form">
    
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card mt-5">
                    <h3 class="card-header text-center">Login</h3>
                    @if(\Session::has('message'))
                        <div class="alert alert-info">
                            {{\Session::get('message')}}
                        </div>
                    @endif
                    <div class="card-body mt-3">
                        <form method="POST" action="{{ route('postlogin') }}">
                            @csrf
                           <div class="form-group mb-3">
                            <input type="text" placeholder="Email" id="email" class="form-control" name="email" autofocus>
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
                           <!-- <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                           </div>  -->
                           <div class="d-grid mx-auto">
                            <button type="submit" class="btn-dark btn-block border-bottom">Masuk</button>
                           </div>
                           <span class="border-bottom"></span>
                           <hr>
                           <P class="mt-2">Belum punya akun? <a href="signup">Daftar disini!</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
</main>
@endsection