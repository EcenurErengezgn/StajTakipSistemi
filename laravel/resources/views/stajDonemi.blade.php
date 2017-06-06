@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
{!!Html::style('../resources/assets/css/bootstrap.css')!!}
<div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-file-text-o"></i> Staj Dönemi </h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="icon_document_alt"></i>Staj İşlemleri</li>
        <li><i class="fa fa-file-text-o"></i>Staj Dönemi</li>
      </ol>
       <nav class="navbar navbar-default">
   <div >
   <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Staj Dönemi Ekleme</div>
      <div class="panel-body">
       <form class="form-horizontal" action=" {{ url('/stajDonemikaydet') }} " method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <label class="col-md-4">Adı</label>
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
      <div class="panel-heading">Staj Dönemi Listesi</div>
      <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th>Adi</th>
                    <th>İşlemler</th>
                    
                </tr>
                @foreach($stajDonemiliste as $stajDonemi)
                
                <tr>
                    <td>{{ $stajDonemi->adi }}</td>
                    <td><a href="{{url('/stajDonemisil/'.$stajDonemi->id)}}">Sil</a> - <a href="{{url('/stajDonemiguncelle/'.$stajDonemi->id)}}">Güncelle</a></td>
                   
                </tr>
                
                 @endforeach()
            </table>
            @if(isset($stajDonemiguncelle))
             <form class="form-horizontal" action=" {{ url('/stajDonemiguncelle') }} " method="post">
              {{ csrf_field() }}
              <input type="hidden" name="id" value="{{$stajDonemiguncelle->id}}">
              <div class="form-group">
                <label class="col-md-4">Adi</label>
                <div class="col-md-4">
                  <input type="text" name="adi" class="form-control" value="{{$stajDonemiguncelle->adi}}">
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
             
            @endif

              </div>

   </div>
   

</nav>








@endsection