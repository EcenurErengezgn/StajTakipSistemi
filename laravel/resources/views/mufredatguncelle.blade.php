@extends('layouts.master')
@section('content')
<style type="text/css">
#bolum {
 position: absolute;

      left: 610px;
      top: 180px;
}
#bolum_id {
  width:210%;
}

</style>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
{!!Html::style('../resources/assets/css/bootstrap.css')!!}
<div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-file-text-o"></i>Müfredat Bilgileri </h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="icon_document_alt"></i>Öğrenci İşlemleri</li>
        <li><i class="fa fa-file-text-o"></i>Müfredat Bilgileri</li>
      </ol>


  <nav class="navbar navbar-default">
   <div >
   <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Müfredat Bilgileri Güncellenmesi</div>
      <div class="panel-body">
<form class="form-horizontal" action="{{ route('mufredatguncelle',array($mufredat->id)) }}" method="POST">
             {{ csrf_field() }}
             <div class="form-group">
                <label class="col-md-4">Adı</label>
                <div class="col-md-4">
                  <input type="text" name="adi"
                  id="adi" class="form-control" value="{{ $mufredat->adi }}" >
                </div>
                @if ($errors->has('adi'))
             {{ $errors->first('adi') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4">Gün</label>
                <div class="col-md-4">
                  <input type="text" name="gun"
                  id="gun" class="form-control" value="{{ $mufredat->gun }}" >
                </div>
                @if ($errors->has('gun'))
             {{ $errors->first('gun') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4">Bölüm</label>
                <div id="bolum" >
                <select name="bolum_id" id="bolum_id">
                  @foreach($bolum as $b)
                   <option value="{{ $b->id }}" {{$mufredat->bolum_id==$b->id ?'selected': null }}> {{ $b->adi }}</option>
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
