@extends('admin.template.master')

@section('title', 'Encurtador de URL | Todos os links')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Todos os links</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Todos os links</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content-main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-link me-1"></i>
                        Links encurtados
                    </div>

                    <table class="table mb-0">
                        @foreach ($links as $link)
                            <tr>
                                <td><a href="{{ $link->original_url }}">{{ $link->original_url }}</a></td>
                                <td><a href="{{ url("/{$link->code_url}") }}">{{ url("/{$link->code_url}") }}</a></td>
                            </tr>
                        @endforeach
                    </table>

                    @if ($links->hasPages())
                        <div class="card-footer">
                            {{ $links->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style-code')
    <style>
        .pagination {
            margin-bottom: 0;
        }
    </style>
@endpush
