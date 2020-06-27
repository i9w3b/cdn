@extends('layouts.app')
@section('title',__('Template Painel Master'))
@section('content')
@if(1==2)
<style>
    body {
        background-color: #333;
        color: #F2F2F2;
    }
    .card {
border: 1px solid rgba(0,0,0,.125);
border-radius: .25rem;
background-color: #222!important;
    }
.navbar{
    background-color: #222 !important;
    border-color: #080808 !important;
}
.container a{
    color: #F2F2F2 !important;
}
</style>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@lang('Welcome')</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Tema Laravel 7.x CDN Bootstrap 4

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
