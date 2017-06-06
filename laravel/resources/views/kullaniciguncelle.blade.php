@extends('layouts.master')
@section('content')
<style type="text/css">
#bolum {
 position: absolute;

      left: 610px;
      top: 380px;


}
#unvan {
 position: absolute;

      left: 610px;
      top: 435px;


}
#department_id {
  width:210%;
}
#role_id
 {
  width:480%;
}
</style>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
{!!Html::style('../resources/assets/css/bootstrap.css')!!}
<div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-file-text-o"></i> Kullanici </h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="icon_document_alt"></i>Kullanici İşlemleri</li>
        <li><i class="fa fa-file-text-o"></i>Kullanici</li>
      </ol>


  <nav class="navbar navbar-default">
   <div >
   <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Kullanici Güncellenmesi</div>
      <div class="panel-body">
<form class="form-horizontal" action="{{ route('kullaniciguncelle',array($user->id)) }}" method="POST">
             {{ csrf_field() }}
             <div class="form-group">
                <label class="col-md-4">Adı</label>
                <div class="col-md-4">
                  <input type="text" name="name"
                  id="name" class="form-control" value="{{ $user->name }}" >
                </div>
                @if ($errors->has('name'))
             {{ $errors->first('name') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4">Soyadı</label>
                <div class="col-md-4">
                  <input type="text" name="last_name"
                  id="last_name" class="form-control" value="{{ $user->last_name }}" >
                </div>
                @if ($errors->has('last_name'))
             {{ $errors->first('last_name') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4">TC No</label>
                <div class="col-md-4">
                  <input type="text" name="TC_number"
                  id="TC_number" class="form-control" value="{{ $user->TC_number }}" >
                </div>
                @if ($errors->has('TC_number'))
             {{ $errors->first('TC_number') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4">EPosta</label>
                <div class="col-md-4">
                  <input type="text" name="email"
                  id="email" class="form-control" value="{{ $user->email }}" >
                </div>
                @if ($errors->has('email'))
             {{ $errors->first('email') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4">Parola</label>
                <div class="col-md-4">
                  <input type="text" name="password"
                  id="password" class="form-control" value="{{ $user->password }}" >
                </div>
                @if ($errors->has('password'))
             {{ $errors->first('password') }}
                @endif
                </div>
              <div class="form-group">
                <label class="col-md-4">Bölüm</label>
                <div id="bolum" >
                <select name="department_id" id="department_id">
                  @foreach($bolum as $b)
                   <option value="{{ $b->id }}" {{$user->department_id==$b->id ?'selected': null }}> {{ $b->adi }}</option>
                   @endforeach
                </select>
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-4">Unvan</label>
                <div id="unvan" >
                <select name="role_id" id="role_id">
                  @foreach($role as $r)
                   <option value="{{ $r->id }}" {{$user->role_id==$r->id ?'selected': null }}> {{ $r->name }}</option>
                   @endforeach
                </select>
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-4 col-md-offset-4">
                  <input type="submit" name="Guncelle" class="btn btn-primary" value="Güncelle">
                </div>
              </div>

@endsection
