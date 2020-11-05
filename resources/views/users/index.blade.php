@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')


@endsection

@section('content')

<div class="card">

    <div class="card-header">
        <h1>Meus Usuários

            <a href="{{ route('users.create') }}" class="btn btn-sm btn-success">Novo Usuários</a>
        </h1>
    </div>

    <div class="card-body">
        <table class="table table-hover">
            <tr>
                <th> ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>

@foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-sm btn-warning">Editar</a>
@if($loggedId !== intval($user->id))
                        <form class="d-inline" action="{{ route('users.destroy', ['user'=>$user->id]) }}" method="POST" onsubmit="return confirm('O usuario sera excluido')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Excluir</button>
                        </form>
@endif
                    </td>
                </tr>
@endforeach

        </table>

        {{ $users->links() }}
    </div>

</div>




@endsection
