
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-2
    {{ $bg ?? ''}} {{ $box ?? ''}}"
       id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0"
           href="{{ route('dashboard', ['page' => 'default']) }}">
            <span class="ms-1 font-weight-bold "><img src="/assets/img/favicon.png" width="20"> FacilitaPay Admin <small>v1.1.0</small></span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            {{--            Dashboard--}}
            <li class="nav-item">
                <a class="nav-link mainlink {{ str_contains(request()->url(), 'default') == true ? 'active' : '' }}" href="{{ route('dashboard', ['page' => 'default']) }}">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-spaceship text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Painel</span>
                </a>
            </li>
            {{--            Dashboard--}}



            {{--Parceiros--}}

{{--            <li class="nav-item">--}}
{{--                <a data-bs-toggle="collapse" href="#partners" class="nav-link mainlink {{ Route::currentRouteName() == 'partner-new' ||  Route::currentRouteName() == 'partner-edit' || Route::currentRouteName() == 'partner-management' ? 'active' : '' }}"--}}
{{--                   aria-controls="partners" role="button" aria-expanded="false">--}}
{{--                    <div class="icon icon-shape icon-sm text-center d-flex align-items-end justify-content-center" style="padding:8px;">--}}
{{--                        <svg style="color:#1DA890; fill:#1DA890; " width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M506.1 127.1c-17.97-20.17-61.46-61.65-122.7-71.1c-22.5-3.354-45.39 3.606-63.41 18.21C302 60.47 279.1 53.42 256.5 56.86C176.8 69.17 126.7 136.2 124.6 139.1c-7.844 10.69-5.531 25.72 5.125 33.57c4.281 3.157 9.281 4.657 14.19 4.657c7.406 0 14.69-3.375 19.38-9.782c.4062-.5626 40.19-53.91 100.5-63.23c7.457-.9611 14.98 .67 21.56 4.483L227.2 168.2C214.8 180.5 207.1 196.1 207.1 214.5c0 17.5 6.812 33.94 19.16 46.29C239.5 273.2 255.9 279.1 273.4 279.1s33.94-6.813 46.31-19.19l11.35-11.35l124.2 100.9c2.312 1.875 2.656 5.251 .5 7.97l-27.69 35.75c-1.844 2.25-5.25 2.594-7.156 1.063l-22.22-18.69l-26.19 27.75c-2.344 2.875-5.344 3.563-6.906 3.719c-1.656 .1562-4.562 .125-6.812-1.719l-32.41-27.66L310.7 392.3l-2.812 2.938c-5.844 7.157-14.09 11.66-23.28 12.6c-9.469 .8126-18.25-1.75-24.5-6.782L170.3 319.8H96V128.3L0 128.3v255.6l64 .0404c11.74 0 21.57-6.706 27.14-16.14h60.64l77.06 69.66C243.7 449.6 261.9 456 280.8 456c2.875 0 5.781-.125 8.656-.4376c13.62-1.406 26.41-6.063 37.47-13.5l.9062 .8126c12.03 9.876 27.28 14.41 42.69 12.78c13.19-1.375 25.28-7.032 33.91-15.35c21.09 8.188 46.09 2.344 61.25-16.47l27.69-35.75c18.47-22.82 14.97-56.48-7.844-75.01l-120.3-97.76l8.381-8.382c9.375-9.376 9.375-24.57 0-33.94c-9.375-9.376-24.56-9.376-33.94 0L285.8 226.8C279.2 233.5 267.7 233.5 261.1 226.8c-3.312-3.282-5.125-7.657-5.125-12.31c0-4.688 1.812-9.064 5.281-12.53l85.91-87.64c7.812-7.845 18.53-11.75 28.94-10.03c59.75 9.22 100.2 62.73 100.6 63.29c3.088 4.155 7.264 6.946 11.84 8.376H544v175.1c0 17.67 14.33 32.05 31.1 32.05L640 384V128.1L506.1 127.1zM48 352c-8.75 0-16-7.245-16-15.99c0-8.876 7.25-15.99 16-15.99S64 327.2 64 336.1C64 344.8 56.75 352 48 352zM592 352c-8.75 0-16-7.245-16-15.99c0-8.876 7.25-15.99 16-15.99s16 7.117 16 15.99C608 344.8 600.8 352 592 352z"/></svg>--}}
{{--                    </div>--}}
{{--                    <span class="nav-link-text ms-1">Parceiros </span>--}}
{{--                </a>--}}
{{--                <div class="collapse {{ Route::currentRouteName() == 'partner-new' ||  Route::currentRouteName() == 'partner-edit' ||  Route::currentRouteName() == 'partner-management' ? 'show' : '' }}" id="partners">--}}
{{--                    <ul class="nav ms-4">--}}
{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link {{ Route::currentRouteName() == 'partner-new' ? 'active' : '' }}" href="{{ route('partner-new') }}">--}}
{{--                                <span class="sidenav-mini-icon"> N </span>--}}
{{--                                <span class="sidenav-normal"> Cadastrar Parceiro </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link {{ Route::currentRouteName() == 'partner-management' ||  Route::currentRouteName() == 'partner-edit' ? 'active' : '' }}" href="{{ route('partner-management') }}">--}}
{{--                                <span class="sidenav-mini-icon"> C </span>--}}
{{--                                <span class="sidenav-normal"> Gerenciar Parceiros </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}
            {{--Parceiros--}}



            {{--            Páginas--}}

            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#pages" class="nav-link mainlink {{ Route::currentRouteName() == 'block-new' || Route::currentRouteName() == 'block-management' || Route::currentRouteName() == 'block-edit' || Route::currentRouteName() == 'page-new' || Route::currentRouteName() == 'page-management' ? 'active' : '' }}"
                   aria-controls="pages" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-end justify-content-center">
                        <i class="far fa-file-lines" style="color: #1DA890; font-size: 14px; font-weight: 500 "></i>
                    </div>
                    <span class="nav-link-text ms-1">Páginas </span>
                </a>
                <div class="collapse {{ Route::currentRouteName() == 'page-new' || Route::currentRouteName() == "block-management" || Route::currentRouteName() == 'block-new' || Route::currentRouteName() == 'block-edit' || Route::currentRouteName() == 'page-management' ? 'show' : '' }}" id="pages">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link {{ Route::currentRouteName() == 'page-new' ? 'active' : '' }}" href="{{ route('page-new') }}">
                                <span class="sidenav-mini-icon"> N </span>
                                <span class="sidenav-normal"> Criar Página </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link {{ Route::currentRouteName() == 'page-management' ? 'active' : '' }}" href="{{ route('page-management') }}">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal"> Gerenciar Páginas </span>
                            </a>
                        </li>

{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link {{ Route::currentRouteName() == 'block-management' || Route::currentRouteName() == 'block-new' || Route::currentRouteName() == 'block-edit' ? 'active' : '' }}" href="{{ route('block-management') }}">--}}
{{--                                <span class="sidenav-mini-icon"> B </span>--}}
{{--                                <span class="sidenav-normal"> Gerenciar Blocos </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
                </div>
            </li>

            {{--            Páginas--}}




            {{--            Newsletter--}}

            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#newsletter" class="nav-link mainlink {{ Route::currentRouteName() == 'newsletter-new' || Route::currentRouteName() == 'newsletter-management' ? 'active' : '' }}"
                   aria-controls="newsletter" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-end justify-content-center">
                        <i class="far fa-paper-plane" style="color: #1DA890; font-size: 14px; font-weight: 500 "></i>
                    </div>
                    <span class="nav-link-text ms-1">Newsletter </span>
                </a>
                <div class="collapse {{ Route::currentRouteName() == 'newsletter-new' || Route::currentRouteName() == 'newsletter-management' ? 'show' : '' }}" id="newsletter">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link {{ Route::currentRouteName() == 'newsletter-management' ? 'active' : '' }}" href="{{ route('newsletter-management') }}">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal"> Gerenciar Assinantes </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            {{--            Newsletter--}}



            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#config" class="nav-link mainlink {{ Route::currentRouteName() == 'user-management' || Route::currentRouteName() == 'role-management' ? 'active' : '' }}"
                   aria-controls="config" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-ui-04 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Configurações </span>
                </a>
                <div class="collapse {{ Route::currentRouteName() == 'user-management' || Route::currentRouteName() == 'role-management' ? 'show' : '' }}" id="config">
                    <ul class="nav ms-4">

                        @can('manage-users', auth()->user())
                            <li class="nav-item ">
                                <a class="nav-link {{ Route::currentRouteName() == 'user-management' ? 'active' : '' }}" href="{{ route('user-management') }}">
                                    <span class="sidenav-mini-icon"> U </span>
                                    <span class="sidenav-normal"> Gerenciar Usuários </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ Route::currentRouteName() == 'role-management' ? 'active' : '' }}" href="{{ route('role-management') }}">
                                    <span class="sidenav-mini-icon"> P </span>
                                    <span class="sidenav-normal"> Gerenciar Permissões </span>
                                </a>
                            </li>
                        @endcan

                    </ul>
                </div>
            </li>

        </ul>
    </div>
    <div class="sidenav-footer mx-3 my-3">
        <a href="https://quatroventos.freshdesk.com/support/home" target="_blank"
           class="btn btn-dark btn-sm w-100 mb-3">Precisa de ajuda?</a>
    </div>
</aside>
