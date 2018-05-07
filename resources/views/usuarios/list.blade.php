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
                           <th></th>
                           <th></th>
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
                           <td>
                              <a href="{{ route('usuarios.edit', $user->id) }}">
                              <i class="material-icons">create</i>
                              </a>
                           </td>
                           <td>    
                              {!! Form::open(['route' => ['usuarios.destroy', $user->id], 'method' => 'DELETE']) !!}
                              <button type="submit" class="btn btn-danger">
                              BORRAR!
                              </button>
                              {!! Form::close() !!} 
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
</div>
@endsection