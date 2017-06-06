@extends('layouts.master')
@section('content')
<style type="text/css">
#soru {
 position: absolute;

      left: 610px;
      top: 57px;


}
#mulakatsorulari_id {
  width:260%;
}
</style>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
{!!Html::style('../resources/assets/css/bootstrap.css')!!}

<div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-file-text-o"></i> Mülakat Puanlaması </h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="icon_document_alt"></i>Staj İşlemleri</li>
        <li><i class="fa fa-file-text-o"></i>Mülakat Puanlaması</li>
      </ol>


  <nav class="navbar navbar-default">
   <div >
   <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Mülakat Puanlaması Güncellenmesi</div>
      <div class="panel-body">
<form class="form-horizontal" action="{{ route('mulakatpuanlamasiguncelle',array($mulakatpuanlamasi->id)) }}" method="POST">
             {{ csrf_field() }}
              <div class="form-group">
                <label class="col-md-4">Soru Adı</label>
                 <div id="soru" >
                <select name="mulakatsorulari_id" id="mulakatsorulari_id">
                  @foreach($mulakatsorulari as $soru)
                   <option value="{{ $soru->id }}" {{$mulakatpuanlamasi->mulakatsorulari_id==$soru->id ?'selected': null }}> {{ $soru->soru }}</option>
                   @endforeach
                </select>
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-4">Soru Cevabı</label>
                <div class="col-md-4">
                  <input type="text" name="cevap"
                  id="cevap" class="form-control" value="{{ $mulakatpuanlamasi->cevap }}" >
                </div>
                @if ($errors->has('cevap'))
             {{ $errors->first('cevap') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4">Soru Puanı</label>
                <div class="col-md-4">
                  <input type="text" name="puan" id="puan" class="form-control"  value="{{ $mulakatpuanlamasi->puan }}">
                </div>
                @if ($errors->has('puan'))
             {{ $errors->first('puan') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4 col-md-offset-4">
                  <input type="submit" name="Guncelle" class="btn btn-primary" value="Güncelle">
                </div>
              </div>

@endsection
