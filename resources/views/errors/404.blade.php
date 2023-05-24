@extends('frontend.layouts.site', [
    'body_class' => 'error',
    'title' => 'Aliança Francesa',
    'description' => 'A Aliança Francesa de Curitiba foi fundada em 1945. Desde sua criação, sua contribuição para a difusão das culturas francófonas e da língua francesa em Curitiba foi enorme, bem como para o fortalecimento de laços de amizade entre os dois países.',
    'canonical' => URL::to('/'),
    'locale' => 'pt_BR',
    'content' => 'website',
    'url' => URL::to('/'),
    'websitename' => 'Aliança Francesa',
    'image' => asset('frontend/assets/img/og-image.jpg'),
    'imgw' => '1200',
    'imgh' => '630'
])
@section('content')
    <section id="banner">
        <div class="container container-big">
            <div class="row">
                <div class="col-12">

                    <h3 class="small-subtitle">
                        <span>404</span>
                    </h3>

                    <h1 class="text-bigger title-under">
                        <b>Página não encontrada</b>
                    </h1>

                    <a href="{{URL::to('/')}}" class="solid-button text-medium" color="red">
                        <span><b>Voltar a página inicial</b></span>
                    </a>

                </div>
            </div>
        </div>
    </section>
@endsection
