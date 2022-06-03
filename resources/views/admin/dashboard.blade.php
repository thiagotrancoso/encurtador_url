@extends('admin.template.master')

@section('title', 'Encurtador de URL | Dashboard')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content-main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $data['quantUrlShortened'] }}</h3>
                        <p>Url's encurtadas</p>
                    </div>

                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content-outside')
@endsection

@push('style-link')
@endpush

@push('style-code')
@endpush

@push('script-link')
@endpush

@push('script-code')
@endpush
