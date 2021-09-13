@extends('layouts.app')

@section('content')
@include('auth._partials.navi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Usuarios') }}</div>

                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              
                 <table class="table">
                     <div class="col-md-12">
                   

                    </div>
                   
                    <thead> 
                    <tr>
                         <th>id</th>
                         <th>img</th>
                         <th>Nome</th>
                         <th>E-mail</th>
                         <th>Ações</th>
                     </tr>
                    </thead>
                    <tbody>
                       @foreach ($users as $user)
                           @php
                             $class = ($user->status == 'ativado' ?  "success" : "dark");
                             $status = ($user->status == 'ativado' ?  "ativado" : "desativado");
                           @endphp
                   
                        <tr>
                            <td>{{$user->id}}</td>
                            <td><img src="storage/avatars/{{$user->avatar}}" alt="" width="100" height="100"></td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <button class="btn btn-info"><a href="editar/{{$user->id}}">Editar</a>  </button>
                                <button class="btn-{{$class}}">
                                    <form action="/status/{{$user->id}}" method="POST">
                                        @csrf
                                        <input type="submit" class="btn-{{$class}}" name="status" value="{{$status}}">
 
                                    </form>
                                 
                                
                                </button>
                                <button class="btn btn-danger">
                                    <form action="/destroy/{{$user->id}}" method="POST">
                                    @csrf
                                    <input type="submit" class="btn-danger" name="status" value="excluir">

                                </form></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                 </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
