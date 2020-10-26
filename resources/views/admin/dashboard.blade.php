@extends('layouts.master')

@section('title')
   Dashboard
@endsection

@section('content')

<div class="row">
  <div class="col-md-12">
   <div class="card">
     <div class="card-header">
       <h4 class="card-title">Registrovani Korisnici</h4>
     </div>
     <div class="card-body">
       <div class="table-responsive">
         <table class="table text-center">
           <thead class="bg-dark">
             <th class="text-success">
               <b>Svi Korisici<b>
             </th>
             <th class="text-white">
               <b>Korisnici</b>
             </th>
             <th class="text-warning">
             <b>Super korisnici</b>
             </th>
             <th class="text-danger">
             <b>Administratori</b>
             </th>
           </thead>
           <tbody class="bg-secondary text-white">
             <tr>
               <td>
                 {{ \DB::table('users')->count()}}
               </td>
               <td>
                 {{ \DB::table('users')->where('usertype', '=', 'member')->count()}}
               </td>
               <td>
                 {{ \DB::table('users')->where('usertype', '=', 'super_member')->count()}}
               </td>
               <td>
                 {{ \DB::table('users')->where('usertype', '=', 'admin')->count()}}
               </td>
             </tr>
           </tbody>
         </table>
       </div>
     </div>
     <!--
     <div class="card-header">
     <div class="card-body">
       <div class="table-responsive">
         <table class="table text-center">
           <thead class="bg-dark">
             <th class="text-success">
               <b>Soon<b>
             </th>
             <th class="text-white">
               <b>Soon</b>
             </th>
             <th class="text-warning">
             <b>Soon</b>
             </th>
             <th class="text-danger">
             <b>Soon</b>
             </th>
           </thead>
           <tbody class="bg-secondary text-white">
             <tr>
               <td>
                 -
               </td>
               <td>
                -
               </td>
               <td>
                -
               </td>
               <td>
                 -
               </td>
             </tr>
           </tbody>
         </table>
       </div>
     </div> -->
   </div>
  </div>
</div>


      
   
@endsection

@section('scripts')

@endsection