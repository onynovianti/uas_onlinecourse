@extends('partials.main')

@section('konten')
@include('sweetalert::alert')
<div class="breadcrumb-area" style="padding-top: 15%">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <div class="breadcrumb-title">
                <h2>Login - Register </h2>
            </div>
        </div>
    </div>
</div>
<div class="login-register-area pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 offset-lg-2">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-bs-toggle="tab">
                            <h4> login </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="/logincek" method="post"> 
                                        @csrf
                                        @error('email')
                                        <code>
                                        {{ $message }}
                                        </code>
                                        @enderror
                                        <input type="email" placeholder="Email" name="email" value={{ old('email') }}>

                                        @error('password')
                                        <code>
                                        {{ $message }}
                                        </code>
                                        @enderror
                                        <input type="password" placeholder="Password" name="password" value={{ old('password') }}>
                                        
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                            </div>
                                            <button type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection