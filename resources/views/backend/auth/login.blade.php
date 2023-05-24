@extends('backend.layouts.app')

@section('content')
    <main class="main-content  mt-0">
        <div class=" align-items-start min-vh-50 pt-7 pb-9 m-3 border-radius-lg" >
            <span class="mask  opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <img width="400" src="{{asset('/assets/img/logo-facilitapay.svg')}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card mt-5">
{{--                        <div class="card-header pb-0 text-start">--}}
{{--                            <h3 class="font-weight-bolder">Login</h3>--}}
{{--                            <p class="mb-0">Use seu e-mail e senha para acessar:</p>--}}
{{--                        </div>--}}
                        <div class="card-body">
                            <form role="form" method="POST" action="{{route('login.perform') }}" class="text-start">
                                @csrf
                                <label>E-mail</label>
                                <div class="mb-3">
                                    <input type="email" name="email" value="{{ old('email') ?? 'admin@argon.com' }}" class="form-control" placeholder="Email" aria-label="Email">
                                    @error('email') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                                <label>Senha</label>
                                <div class="mb-3">
                                    <input type="password" name="password" value="secret" class="form-control" placeholder="Password" aria-label="Password">
                                    @error('password') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
{{--                                <div class="form-check form-switch">--}}
{{--                                    <input class="form-check-input" type="checkbox" id="rememberMe" checked="">--}}
{{--                                    <label class="form-check-label" for="rememberMe">Mantenha-me logado</label>--}}
{{--                                </div>--}}
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary w-100 mt-4 mb-0">Entrar</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <p class="mb-1 text-sm mx-auto">
                                <a href="{{ route('reset-password') }}" class="text-primary text-gradient font-weight-bold">Esqueci minha senha</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('backend.layouts.footers.auth.desc-footer')
@endsection
