@extends('backend.layouts.app')

@section('content')
    <style>
        .btn-trans{
            padding:4px;
            border-radius: 2px;
            color:white;
            background: #0b90a8;
            font-size: 11px;
            width: 25px;
            height: 25px;
            margin:8px 0px 8px 0;
        }
        .btn-trans a:hover{
            color:white;
        }
        .btn-trans:hover {
            color:white;
            background: #1ab8d3;
        }
    </style>
    <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid py-1 px-3">
            @include('backend.layouts.navbars.auth.topnav', ['title' => 'Gerenciar Páginas'])

            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        @include('backend.auth.logout')
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="mb-0">Gerenciar Páginas</h5>
                        @can('manage-items')
                            <a href="{{ route('page-new') }}" class="btn bg-gradient-dark btn-sm float-end mb-0">Criar Página</a>
                        @endcan
                    </div>
                    <div class="px-4" id="alert">
                        @include('backend.components.alert')
                    </div>
                    <div class="table-responsive">
                        <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Título
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Resumo
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="100">
                                        Data de criação
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="100">
                                        Atualizada em
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="100">
                                        Ações
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pages as $page)
                                    <tr>
                                        <td class="text-sm font-weight-normal">{{ $page->title }}</td>
                                        <td class="text-sm font-weight-normal">{{ Str::limit($page->metadescription, 70) }}</td>
                                        <td class="text-sm font-weight-normal">{{ $page->createdAt() }}</td>
                                        <td class="text-sm font-weight-normal">{{ $page->modifiedAt() }}</td>
                                        <td class="text-sm">
                                            <span class="d-flex align-items-center">
                                                @can('manage-items', auth()->user())
                                                    <a href="{{ route('page-edit', ['en', $page->id]) }}" class="me-2" data-bs-toggle="tooltip"
                                                       data-bs-original-title="Editar página em Inglês">
                                                        <div class="btn btn-trans">EN</div>
                                                    </a>
                                                    <a href="{{ route('page-edit', ['pt',$page->id]) }}" class="me-2" data-bs-toggle="tooltip"
                                                       data-bs-original-title="Editar página em Português">
                                                        <div class="btn btn-trans">PT</div>
                                                    </a>
                                                    <a href="{{ route('page-edit', ['es',$page->id]) }}" class="me-2" data-bs-toggle="tooltip"
                                                       data-bs-original-title="Editar página em Espanhol">
                                                        <div class="btn btn-trans">ES</div>
                                                    </a>

                                                    <form action="{{ route('page-destroy', $page->id) }}" method="post">
                                                        @csrf
                                                        <button onclick="confirm('Tem certeza que deseja apagar esta página?') || event.stopImmediatePropagation()"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Apagar página"
                                                            class="border-0 bg-white">
                                                            <i class="fas fa-trash text-secondary"></i>
                                                        </button>
                                                    </form>
                                                @endcan
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @include('backend.layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script src="/assets/js/plugins/datatables.js"></script>
    <script>
        const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
            labels: {
                placeholder: "Buscar...", // The search input placeholder
                perPage: "{select} páginas por página.", // per-page dropdown label
                noRows: "Nenhuma página encontrada :(", // Message shown when there are no records to show
                noResults: "Nenhum resultado para sua busca :(", // Message shown when there are no search results
                info: "Mostrando {start} a {end} de um total de {rows} páginas." //
            },
            searchable: true,
            fixedHeight: true
        });
    </script>
@endpush
