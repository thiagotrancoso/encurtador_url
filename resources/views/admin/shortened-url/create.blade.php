@extends('admin.template.master')

@section('title', 'Encurtador de URL | Encurtar URL')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Encurtar URL</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Encurtar URL</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content-main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form method="post" name="create">
                        @csrf

                        <div class="card-body">
                            <div class="form-group" id="form-group-original_url">
                                <label for="original_url">URL original: <small>(Obrigatório)</small></label>
                                <div class="input-group">
                                    <input type="text" id="original_url" name="original_url" class="form-control">
                                    <div id="original_url-validation-feedback" class="invalid-feedback"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="code_url">Nome personalizado: <small>(Opcional)</small></label>
                                <div class="input-group">
                                    <input type="text" id="code_url" name="code_url" class="form-control">
                                    <div id="code_url-validation-feedback" class="invalid-feedback"></div>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <label for="expiration">Data de expiração: <small>(Opcional)</small></label>
                                <div class="input-group">
                                    <input type="text" name="expiration" id="expiration" class="form-control"
                                        data-inputmask-alias="datetime"
                                        data-inputmask-inputformat="dd/mm/yyyy"
                                        data-mask=""
                                        inputmode="numeric"
                                    >
                                    <div id="expiration-validation-feedback" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Encurtar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row" id="result">
            <div class="col-md-12">
                <p class="mb-2"><strong>URL encurtada</strong></p>
                <p id="shortened_url"></p>
            </div>
        </div>
    </div>
@endsection

@section('style-code')
    <style>
        small {
            font-size: 12px;
            color: #777777;
        }

        #result {
            display: none;
        }
    </style>
@endsection

@push('script-link')
    <!-- InputMask -->
    <script src="{{ asset('assets/admin/plugins/inputmask/jquery.inputmask.min.js') }}"></script>

    <!-- Shortener url -->
    <script src="{{ asset('assets/admin/js/shortener.min.js') }}"></script>
@endpush
