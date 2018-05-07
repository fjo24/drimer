@extends('layouts.panel-usuarios')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header">USUARIOS</div>
            <div class="card-body">
               @if (session('status'))
               <div class="alert alert-success">
                  {{ session('status') }}
               </div>
               @endif
               <div class="box-body table-responsive no-padding">
                  <table class="table table-hover table-striped" id="table">
                     <thead>
                        <tr>
                           <th>NOMBRE</th>
                           <th>EMAIL</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($users as $user)
                        <tr>
                           <td>
                              {{ $user->name }}
                           </td>
                           <td>
                              {{ $user->email }}
                           </td>
                           {!! Form::open(['route' => ['usuarios.destroy', $user->id], 'method' => 'DELETE']) !!}
                           <div class="form-group">
                              <a href="{{ route('usuarios.show', $user->id) }}">
                              <i class="fa fa-eye" aria-hidden="true"></i>
                              </a>
                           </div>
                           <div class="form-group">
                              <a href="{{ route('usuarios.edit', $user->id) }}">
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                              </a>
                           </div>
                           <div class="form-group">
                              <button type="submit" class="btn btn-link" title="Eliminar" onclick="return confirm('¿Realmente deseas borrar el producto?')"">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                              </button>
                           </div>
                           {!! Form::close() !!}         
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection