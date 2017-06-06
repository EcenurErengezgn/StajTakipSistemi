@extends('layouts.master')
@section('content')

<nav class="navbar navbar-default">
   <div >
   <div class="container">
   <br/>
    <div class="panel panel-default">
    <div class="panel-heading">Kullanıcı Bilgisi</div>
      <div class="panel-body">
            <div class="form-group">
            <table class="table table-bordered">
                <tr>
      <label class="control-label col-md-3 col-xs-12" for="adi">Adı :</tr>
      <span class="required">{{ Auth::user()->name }}</span>
      </label>
      </div>
      <div class="form-group">
      <tr>
      <label class="control-label col-md-3 col-xs-12" for="soyadi">Soyadı :</tr>

      <span class="required">{{ Auth::user()->last_name }}</span>
      </label>
      </div>
      <div class="form-group">
      <tr>
      <label class="control-label col-md-3 col-xs-12" for="email">EPosta :</tr>

      <span class="required">{{ Auth::user()->email }}</span>
      </label>
      </div>
     

      
             </table>
              </div>
             </div>
             </nav>


 
@endsection