@extends('layouts.master')
@section('content')
<style type="text/css">
#kullanici {
 position: absolute;

      left: 610px;
      top: 250px;


}
#mufredat {
 position: absolute;

      left: 610px;
      top: 305px;


}
#kullanici_id {
  width:310%;
}
#mufredat_id
 {
  width:280%;
}
</style>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
{!!Html::style('../resources/assets/css/bootstrap.css')!!}
<div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-file-text-o"></i> Öğrenci </h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="icon_document_alt"></i>Öğrenci İşlemleri</li>
        <li><i class="fa fa-file-text-o"></i>Öğrenci</li>
      </ol>


  <nav class="navbar navbar-default">
   <div >
   <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Öğrenci Güncellenmesi</div>
      <div class="panel-body">
<form class="form-horizontal" action="{{ route('ogrenciguncelle',array($ogrenci->id)) }}" method="POST">
             {{ csrf_field() }}
             <div class="form-group">
                <label class="col-md-4">Öğrenci No</label>
                <div class="col-md-4">
                  <input type="text" name="ogrenci_no"
                  id="ogrenci_no" class="form-control" value="{{ $ogrenci->ogrenci_no }}" >
                </div>
                @if ($errors->has('ogrenci_no'))
             {{ $errors->first('ogrenci_no') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4">Sınıf</label>
                <div class="col-md-4">
                  <input type="text" name="sinif"
                  id="sinif" class="form-control" value="{{ $ogrenci->sinif }}" >
                </div>
                @if ($errors->has('sinif'))
             {{ $errors->first('sinif') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4">Cep Tel</label>
                <div class="col-md-4">
                  <input type="text" name="cep_tel"
                  id="cep_tel" class="form-control" value="{{ $ogrenci->cep_tel }}" >
                </div>
                @if ($errors->has('cep_tel'))
             {{ $errors->first('cep_tel') }}
                @endif
                </div>
              <div class="form-group">
                <label class="col-md-4">Kullanici TC</label>
                 <div id="kullanici" >
                <select name="kullanici_id" id="kullanici_id">
                  @foreach($kullanici as $k)
                   <option value="{{ $k->id }}" {{$ogrenci->kullanici_id==$k->id ?'selected': null }}> {{ $k->TC_number }}</option>
                   @endforeach
                </select>
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-4">Müfredat</label>
                 <div id="mufredat" >
                <select name="mufredat_id" id="mufredat_id">
                  @foreach($mufredat as $m)
                   <option value="{{ $m->id }}" {{$ogrenci->mufredat_id==$m->id ?'selected': null }}> {{ $m->adi }}</option>
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
