@extends('admin.template.master')

@section('Admin | Todos os links')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="my-4">Todos os links</h1>

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
