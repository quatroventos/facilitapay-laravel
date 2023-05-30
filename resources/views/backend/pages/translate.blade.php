@extends('backend.layouts.app')
{{--https://esketchers.com/use-grapesjs-for-building-web-builder-framework/--}}
@section('content')

    <link rel="stylesheet" href="https://unpkg.com/grapesjs/dist/css/grapes.min.css">
    <link href="/assets/css/jquery-seopreview.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/grapesjs/0.20.1/grapes.min.js"></script>

    <style>
        .gjs-block {
            width: auto;
            height: auto;
            min-height: auto;
        }
        .panel__top {
            padding: 0;
            width: 100%;
            display: flex;
            position: initial;
            justify-content: center;
            justify-content: space-between;
        }
        .panel__basic-actions {
            position: initial;
        }
        .gjs-devices-c{
            padding:0;
        }

        .gjs-pn-commands, .gjs-pn-views, .gjs-pn-views, .gjs-pn-views-container {
            box-shadow: none;
        }

        .gjs-block {
            width: auto;
            height: auto;
            min-height: auto;
        }
        .panel__top {
            padding: 0;
            width: 100%;
            display: flex;
            position: initial;
            justify-content: center;
            justify-content: space-between;
        }
        .panel__basic-actions {
            position: initial;
        }
        .gjs-devices-c{
            padding:0;
        }

        .gjs-pn-commands, .gjs-pn-views, .gjs-pn-views, .gjs-pn-views-container {
            box-shadow: none;
        }

        .gjs-block {
            user-select: none;
            min-width: 100%;
            padding: 1em;
            box-sizing: border-box;
            min-height: 90px;
            cursor: all-scroll;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border: 1px solid rgba(0,0,0,.2);
            border-radius: 3px;
            margin: 10px 2.5% 5px;
            box-shadow: 0 1px 0 0 rgb(0 0 0 / 15%);
            transition: all .2s ease 0s;
            transition-property: color;
        }

        .block:hover {
            color: #d278c9;
        }
    </style>

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
                    <h6 class="mb-0">Criar página</h6>
                    <hr class="horizontal dark my-3">

                    <form method="POST" action="{{ route('page-translate.store', $page->id) }}" enctype="multipart/form-data"
                          class="course-form">
                        @csrf

                        <div class="row mt-4">
                            <div class="col-md-10">
                                <label for="name" class="form-label">Título</label>
                                <div>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $page->title) }}">
                                    @error('title')
                                    <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="locale" class="form-label">Idioma</label>
                                <select class="form-control" name="locale" id="locale">
                                    <option value="pt" {{ old('locale') == "pt" ? 'selected' : '' }}>Português</option>
                                    <option value="es" {{ old('locale') == "es" ? 'selected' : '' }}>Espanhol</option>
{{--                                    <option value="en" {{ old('locale') == "en" ? 'selected' : '' }}>Inglês</option>--}}
                                </select>
                                @error('locale')
                                <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                @enderror
                            </div>
                        </div>



                        <input type="hidden" name="html" id="html">
                        <input type="hidden" name="css" id="css">

                        <label for="name" class="form-label mt-4">Conteúdo</label>
                        {{--        Page editor--}}
                        <div class="card" style="overflow: 10px; background: #444444; padding:10px;">
                            <div class="panel__top">
                                <div class="panel__basic-actions"></div>
                            </div>

                            <div id="gjs"></div>

                            <div id="blocks"></div>
                        </div>

                        {{--        Page editor--}}

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
                                <input type="text" name="metatitle" id="meta-title" class="form-control" maxlength="60" value="{{ old('metatitle', $page->metatitle) }}"/>

                                <label class="mt-4 form-label" for="metadescription">Descrição</label>
                                <textarea id="meta-desc" class="form-control" name="metadescription" maxlength="155">{{ old('metadescription', $page->metadescription) }}</textarea>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/assets/js/plugins/jquery-seopreview.min.js"></script>

    <script type="text/javascript">

        const editor = grapesjs.init({
            container: '#gjs',
            fromElement: true,
            storageManager: false,
            autosave: false, // Store data automatically
            autoload: false, // Autoload stored data on init
            // stepsBeforeSave: 1,
            noticeOnUnload: false,
            canvas: {
                styles: [
                    'https://fonts.googleapis.com/css2?family=Outfit:wght@400;700;800&family=Source+Code+Pro:wght@800&display=swap',
                    'https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr',
                    'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css',
                    'http://facilitapay.loc/static/css/responsive.css',
                    'http://facilitapay.loc/static/css/theme.css'
                ],
                scripts: [
                    'http://aflaravel.loc/frontend/assets/js/framework.js',
                    'http://aflaravel.loc/frontend/assets/js/home.js',
                ]
            },
            blockManager: {
                blocks: [

                        @foreach($blocks as $block)
                    {
                        {{--id: '{{$block->title}}',--}}
                        label: '{{$block->title}}',
                        category: '{{$block->category}}',
                        media: '<img src="{{$block->pictureUrl()}}" style="max-width:100%">',
                        activate: {{$block->activate}},
                        content: {
                            type: '{{$block->type}}',
                            content: '{!! $block->content !!}',
                            //style: { padding: '10px' },
                        }
                    },
                    @endforeach
                ],
            },
        });

        editor.getWrapper().addClass('home')

        // Open the default Block Manager container
        const { Panels } = editor;
        Panels.getButton('views', 'open-sm').set('active', false);
        Panels.getButton('views', 'open-blocks').set('active', true);


        editor.on('all', function(e) {
            saveContent(); //your method where you store html content of document in DB using ajax
        })

        //carrega conteudo no editor
        var cssContent = {!! json_encode($page->css) !!}; // Carrega o conteúdo CSS
        var htmlContent = {!! json_encode($page->html) !!}; // Carrega o conteúdo HTML

        editor.setComponents(cssContent);
        editor.setComponents(htmlContent);


        function saveContent()
        {
            // store contents on temporary inputs
            $('#html').val(editor.getHtml());
            $('#css').val(editor.getCss());

            //update SEO metadesc
            var cleanHTML = editor.getHtml().replace(/<\/?[^>]+(>|$)/g, "")
            $('#meta-desc').val(cleanHTML);
        }

    </script>

    <script>
        $("#title").on("keyup", function(e) {

            var title = $(this).val();
            var url = title.toString().toLowerCase()
                .replace(/[àÀáÁâÂãäÄÅåª]+/g, 'a')       // Special Characters #1
                .replace(/[èÈéÉêÊëË]+/g, 'e')       	// Special Characters #2
                .replace(/[ìÌíÍîÎïÏ]+/g, 'i')       	// Special Characters #3
                .replace(/[òÒóÓôÔõÕöÖº]+/g, 'o')       	// Special Characters #4
                .replace(/[ùÙúÚûÛüÜ]+/g, 'u')       	// Special Characters #5
                .replace(/[ýÝÿŸ]+/g, 'y')       		// Special Characters #6
                .replace(/[ñÑ]+/g, 'n')       			// Special Characters #7
                .replace(/[çÇ]+/g, 'c')       			// Special Characters #8
                .replace(/[ß]+/g, 'ss')       			// Special Characters #9
                .replace(/[Ææ]+/g, 'ae')       			// Special Characters #10
                .replace(/[Øøœ]+/g, 'oe')       		// Special Characters #11
                .replace(/[%]+/g, 'pct')       			// Special Characters #12
                .replace(/\s+/g, '-')           		// Replace spaces with -
                .replace(/[^\w\-]+/g, '')       		// Remove all non-word chars
                .replace(/\-\-+/g, '-')         		// Replace multiple - with single -
                .replace(/^-+/, '')             		// Trim - from start of text
                .replace(/-+$/, '');            		// Trim - from end of text

            $('#meta-title').val(title.slice(0, 60));
            $('#meta-url').val(url);

        });

        $.seoPreview({
            google_div: "#seopreview-google",
            metadata: {
                title: $('#meta-title'),
                desc: $('#meta-desc'),
                url: {
                    full_url: $('#meta-url'),
                    base_domain:"{{ env('APP_URL') }}/",
                    auto_dash:true,
                    use_slug:true
                }
            },
            google: {
                show: true
            }
        });

    </script>

@endpush
