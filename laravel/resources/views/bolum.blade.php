@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
{!!Html::style('../resources/assets/css/bootstrap.css')!!}
<div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-file-text-o"></i> Bölüm</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="icon_document_alt"></i>Bölüm İşlemleri</li>
        <li><i class="fa fa-file-text-o"></i>Bölüm</li>
      </ol>
      <nav class="navbar navbar-default">
   <div >
   <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Bölüm Ekleme</div>
      <div class="panel-body">
        <form class="form-horizontal" action=" {{ url('/bolumkaydet') }} " method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <label class="col-md-4">Adi</label>
                <div class="col-md-4">
                  <input type="text" name="adi" class="form-control">
                </div>
                @if ($errors->has('adi'))
             {{ $errors->first('adi') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4 col-md-offset-4">
                  <input type="submit" name="kaydet" class="btn btn-primary" value="Kaydet">
                </div>
              </div>

              
            </form>
      <div class="panel-body">
      <div class="panel-heading">Bölüm Listesi</div>
      <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th>Adi</th>
                    <th>İşlemler</th>
                    
                </tr>
                @foreach($bolumliste as $bolum)
                
                <tr>
                    <td>{{ $bolum->adi }}</td>
                    <td><a href="{{url('/bolumsil/'.$bolum->id)}}">Sil</a> - <a href="{{url('/bolumguncelle/'.$bolum->id)}}">Güncelle</a></td>
                   
                </tr>
                
                 @endforeach()
            </table>
            @if(isset($bolumguncelle))
             <form class="form-horizontal" action=" {{ url('/bolumguncelle') }} " method="post">
              {{ csrf_field() }}
              <input type="hidden" name="id" value="{{$bolumguncelle->id}}">
              <div class="form-group">
                <label class="col-md-4">Adi</label>
                <div class="col-md-4">
                  <input type="text" name="adi" class="form-control" value="{{$bolumguncelle->adi}}">
                </div>
                @if ($errors->has('adi'))
             {{ $errors->first('adi') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4 col-md-offset-4">
                  <input type="submit" name="guncelle" class="btn btn-primary" value="Güncelle">
                </div>
              </div>

              
            </form>

            @else
              <form class="form-horizontal" action=" {{ url('/bolumkaydet') }} " method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <label class="col-md-4">Adi</label>
                <div class="col-md-4">
                  <input type="text" name="adi" class="form-control">
                </div>
                @if ($errors->has('adi'))
             {{ $errors->first('adi') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4 col-md-offset-4">
                  <input type="submit" name="kaydet" class="btn btn-primary" value="Kaydet">
                </div>
              </div>

              
            </form>
            @endif

              </div>

   </div>
   

</nav>








@endsection