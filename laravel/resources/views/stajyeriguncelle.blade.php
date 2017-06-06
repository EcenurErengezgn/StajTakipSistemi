@extends('layouts.master')
@section('content')
<style type="text/css">
#ilce {
 position: absolute;

      left: 620px;
       top: 370px;
      width: 500px;

}

#il {
 position: absolute;

      left: 620px;
      top: 315px;

}

</style>
<div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-file-text-o"></i> Staj Yeri </h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="icon_document_alt"></i>Staj İşlemleri</li>
        <li><i class="fa fa-file-text-o"></i>Staj Yeri</li>
      </ol>
      <div>
      <nav class="navbar navbar-default">

   <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Staj Yeri Güncellenmesi</div>
      <div class="panel-body">
<form class="form-horizontal" action="{{ route('stajyeriguncelle',array($stajyeri->id)) }}" method="POST">
             {{ csrf_field() }}
             <div class="form-group">
                <label class="col-md-4">Adı</label>
                <div class="col-md-4">
                  <input type="text" name="adi"
                  id="adi" class="form-control" value="{{ $stajyeri->adi }}" >
                </div>
                @if ($errors->has('adi'))
             {{ $errors->first('adi') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4">Faks</label>
                <div class="col-md-4">
                  <input type="text" name="faks"
                  id="faks" class="form-control" value="{{ $stajyeri->faks }}" >
                </div>
                @if ($errors->has('faks'))
             {{ $errors->first('faks') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4">Web Adresi</label>
                <div class="col-md-4">
                  <input type="text" name="webadresi"
                  id="webadresi" class="form-control" value="{{ $stajyeri->webadresi }}" >
                </div>
                @if ($errors->has('webadresi'))
             {{ $errors->first('webadresi') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4">Telefon No</label>
                <div class="col-md-4">
                  <input type="text" name="telno"
                  id="telno" class="form-control" value="{{ $stajyeri->telno }}" >
                </div>
                @if ($errors->has('telno'))
             {{ $errors->first('telno') }}
                @endif
                </div>
              <div class="form-group">
                <label class="col-md-4">İl</label>
                 <div id="il" >
                <select name="il_id" id="il_id" style="width:280%;">
                  @foreach($muh_iller as $iller)
                   <option value="{{ $iller->id }}" {{$stajyeri->il_id==$iller->id ?'selected': null }}> {{ $iller->baslik }}</option>
                   @endforeach
                </select>
                </div>
                </div>
                <div class="form-group">
                <label class="col-md-4">İlçe</label>
                <div id="ilce" >
                <select name="ilce_id" id="ilce_id" style="width:72%; ">
                  @foreach($muh_ilceler as $ilceler)
                   <option value="{{ $ilceler->id }}" {{$stajyeri->ilce_id==$ilceler->id ?'selected': null }}> {{ $ilceler->baslik }}</option>
                   @endforeach
                </select>
                </div>
                 </div>
                
                <div class="form-group">
                <label class="col-md-4 col-md-offset-4">
                  <input type="submit" name="Guncelle" class="btn btn-primary" value="Güncelle">
                </div>
              </div>



   <br/><br/>
   <div >
   <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Staj Yeri Listesi</div>
      <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th>Adı</th>
                    <th>Faks</th>
                    <th>Web Adresi</th>
                     <th>Telefon Numarası</th>
                      <th>İl Adı</th>
                       <th>İlçe Adı</th>
                    <th>İşlemler</th>
                    
                </tr>
                 
                @foreach($staj_yeri as $s)
                <tr>
                     <td>{{ $s->adi}}</td>
                      <td>{{ $s->faks }}</td>
                       <td>{{ $s->webadresi}}</td>
                        <td>{{ $s->telno}}</td>
                         <td>{{ $s->il}}</td>
                          <td>{{ $s->ilce}}</td>
                        <td><a href="{{ url('stajyerisil',array($s->id)) }}">Sil</a> - <a href="{{ url('stajyeriguncelle',array($s->id)) }}">Güncelle</a></td>
                      
                   
                </tr>
                @endforeach
                
                 </table>


  
   
@endsection
