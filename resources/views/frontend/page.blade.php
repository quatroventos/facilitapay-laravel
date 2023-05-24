@extends('frontend.layouts.site', [
    'body_class' => 'courses-internal',
    'title' => $page->metatitle.' - Facilita Pay',
    'description' => $page->metadescription,
    'canonical' => route('page', $page->slug),
    'locale' => 'pt_BR',
    'content' => 'website',
    'url' => route('page', $page->slug),
    'websitename' => 'Facilita Pay',
    'image' => '',
    'imgw' => '1200',
    'imgh' => '630'
])

@section('content')
<style type="text/css">
    {!! $page->css !!}
</style>

{!! $page->html !!}
@endsection


@push('js')
