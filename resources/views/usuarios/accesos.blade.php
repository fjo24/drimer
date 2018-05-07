@extends('layouts.panel-accesos')
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
                           <th>FECHA</th>
                           <th>IP</th>
                           <th>ESTADO</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($accesos as $acceso)
                        <tr>
                           <td>
                              {{ $acceso->user->name }}
                           </td>
                           <td>
                              {{ $acceso->date }}
                           </td>
                           <td>
                              {{ $acceso->ip }}
                           </td>
                           <td>
                              {{ $acceso->status }}
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