@extends('backend.layouts.app')
{{--https://esketchers.com/use-grapesjs-for-building-web-builder-framework/--}}
@section('content')

    <style>
        #editor {
            position: absolute  ;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }
    </style>
    <link href="/assets/css/jquery-seopreview.css" rel="stylesheet">

    <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur"
         data-scroll="false">
        <div class="container-fluid py-1 px-3">
            @include('backend.layouts.navbars.auth.topnav', ['title' => 'Editar Página'])

            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        @include('backend.auth.logout')
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                    <li class="nav-item position-relative pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-12 col-12 mx-auto">
                <div class="card card-body mt-4">

                    <div class="card-header d-flex justify-content-between">
                        <h5 class="mb-0">Editar página [{{$translation->locale}}]</h5>
                        <a href="{{ route('page-edit', [$translation->locale,$page->id]) }}" class="btn bg-gradient-dark btn-sm float-end mb-0">Visual</a>
                    </div>

                    <hr class="horizontal dark my-3">

                    <form method="POST" action="{{ route('page-edit.update', $page->id) }}" enctype="multipart/form-data"
                          class="course-form">
                        @csrf


                        <label for="name" class="form-label">Título</label>
                        <div>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $translation->title) }}">
                            @error('title')
                            <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>

                        <input type="hidden" name="locale" value="{{$translation->locale}}">
                        <input type="hidden" name="html" id="html">
                        <input type="hidden" name="css" id="css">

                        <label class="mt-4">HTML</label>
                        <div style="position: relative; border: 1px solid #ccc; min-height: 400px; border-radius: 10px; overflow: hidden;">
                            <div id="editor">{{ old('html', $translation->html) }}</div>
                        </div>
                        @error('content')
                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                        @enderror

                        <input type="hidden" name="html" id="content" value="{{ old('html', $translation->html) }}">


                        <br><br>
                        <h6 class="mb-0">SEO</h6>

                        <div class="row">
                            <div class="col">
                                <label class="mt-4 form-label" for="slug">Endereço</label>

                                <div class="input-group">
                                    <span class="input-group-text" style="padding-right: 0;">{{ env('APP_URL') }}/</span>
                                    <input type="text" id="meta-url" name="slug" class="form-control" aria-label="" value="{{ old('slug', $page->slug) }}">
                                </div>

                                <label class="mt-4 form-label" for="installments">Título</label>
                                <input type="text" name="metatitle" id="meta-title" class="form-control" maxlength="60" value="{{ old('metatitle', $translation->metatitle) }}"/>

                                <label class="mt-4 form-label" for="metadescription">Descrição</label>
                                <textarea id="meta-desc" class="form-control" name="metadescription" maxlength="155">{{ old('metadescription', $translation->metadescription) }}</textarea>
                            </div>
                            <div class="col-md-5">
                                <div class="card card-frame" style="margin-bottom: 10px; background: url('{{asset('/assets/img/seo-preview.webp')}}') no-repeat center center; background-size:cover; height: 300px; padding:70px 10px; margin-top:50px; border:1px solid #CCCCCC; ">
                                    <div class="card-body">
                                        <div id="seopreview-google"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <br>

                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" class="btn bg-gradient-primary m-0 ms-2">Salvar</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    @include('backend.layouts.footers.auth.footer')

@endsection


@push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.14.0/ace.js" integrity="sha512-WYlXqL7GPpZL2ImDErTX0RMKy5hR17vGW5yY04p9Z+YhYFJcUUFRT31N29euNB4sLNNf/s0XQXZfzg3uKSoOdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='http://lovasoa.github.io/tidy-html5/tidy.js'></script>
    <script>
        var editor = ace.edit("editor");
        var textarea = $('#content');
        editor.setTheme("ace/theme/monokai");
        editor.getSession().setMode("ace/mode/javascript");
        editor.getSession().on('change', function () {
            textarea.val(editor.getSession().getValue());
        });
        options = {
            "indent":"auto",
            "indent-spaces":2,
            "wrap":80,
            "markup":true,
            "output-xml":false,
            "numeric-entities":true,
            "quote-marks":true,
            "quote-nbsp":false,
            "show-body-only":true,
            "quote-ampersand":false,
            "break-before-br":true,
            "uppercase-tags":false,
            "uppercase-attributes":false,
            "drop-font-tags":true,
            "tidy-mark":false
        }

        var html = '{!! $translation->html !!}';
        var result = tidy_html5(html, options);
        editor.getSession().setValue(result);
    </script>

@endpush
