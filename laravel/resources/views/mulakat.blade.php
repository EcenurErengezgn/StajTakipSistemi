@extends('layouts.master')
@section('content')
<style type="text/css">
#soru {
 position: absolute;

      left: 615px;
      top: 55px;
     

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
      <h3 class="page-header"><i class="fa fa-file-text-o"></i> Mülakat  </h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="icon_document_alt"></i>Öğrenci İşlemleri</li>
        <li><i class="fa fa-file-text-o"></i>Mülakat </li>
      </ol>
      <nav class="navbar navbar-default">
   <div >
   <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Mülakat  Ekleme</div>
      <div class="panel-body">
      <form class="form-horizontal" action="{{ route('mulakatkaydet')}}" method="POST">
             {{ csrf_field() }}
              <div class="form-group">
                <label class="col-md-4">Öğrenci NO</label>
                 <div id="soru" >
                <select name="ogrenci_id" id="ogrenci_id" >
                  @foreach($ogrenci as $o)
                   <option value="{{ $o->id }}"> {{ $o->adi }}</option>
                   @endforeach
                </select>
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-4">Bitis Tarihi</label>
                <div class="col-md-4">
                  <input type="text" name="bitistarihi"
                  id="cevap" class="form-control" >
                </div>
                @if ($errors->has('cevap'))
             {{ $errors->first('cevap') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4">Soru Puanı</label>
                <div class="col-md-4">
                  <input type="text" name="puan" id="puan" class="form-control">
                </div>
                @if ($errors->has('puan'))
             {{ $errors->first('puan') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4 col-md-offset-4">
                  <input type="submit" name="kaydet" class="btn btn-primary" value="Kaydet">
                </div>
              </div>

              
            </form>



      <div class="panel-body">
      <div class="panel-heading">Mülakat Puanlaması Listesi</div>
      <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th>Soru Adı</th>
                    <th>Soru Cevabı</th>
                    <th>Soru Puanı</th>
                    <th>İşlemler</th>
                    
                </tr>
                 
                @foreach($mulakat as $m)
                <tr>
                     <td>{{ $m->soru}}</td>
                      <td>{{ $m->cevap }}</td>
                       <td>{{ $m->puan}}</td>
                        <td><a href="{{ url('mulakatpuanlamasisil',array($m->id)) }}">Sil</a> - <a href="{{ url('mulakatpuanlamasiguncelle',array($m->id)) }}">Güncelle</a></td>
                      
                   
                </tr>
                @endforeach
                
                 </table>
                 
              
           

@endsection