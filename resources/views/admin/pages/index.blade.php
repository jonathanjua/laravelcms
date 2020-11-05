@extends('adminlte::page')

@section('title', 'Paginas')

@section('content_header')


@endsection

@section('content')

<div class="card">

    <div class="card-header">
        <h1>Minhas Paginas

            <a href="{{ route('pages.create') }}" class="btn btn-sm btn-success">Nova Pagina</a>
        </h1>
    </div>

    <div class="card-body">
        <table class="table table-hover">
            <tr>
                <th width="50"> ID</th>
                <th>Titulo</th>

                <th width="200">Ações</th>
            </tr>

@foreach ($pages as $page)
                <tr>
                    <td>{{ $page->id }}</td>
                    <td>{{ $page->title }}</td>
                    <td>
                        <a href="" target="_blank" class="btn btn-sm btn-success">Ver</a>


                        <a href="{{ route('pages.edit', ['page' => $page->id]) }}" class="btn btn-sm btn-warning">Editar</a>

                        <form class="d-inline" action="{{ route('pages.destroy', ['page'=>$page->id]) }}" method="POST" onsubmit="return confirm('A pagina sera excluido')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Excluir</button>
                        </form>

                    </td>
                </tr>
@endforeach

        </table>

        {{ $pages->links() }}
    </div>

</div>




@endsection
