@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-file-text-o"></i> Mülakat Soruları </h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="icon_document_alt"></i>Staj İşlemleri</li>
        <li><i class="fa fa-file-text-o"></i>Mülakat Soruları</li>
      </ol>


  <nav class="navbar navbar-default">
   <div >
   <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Mülakat Soruları Listesi</div>
      <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th>Soru Adı</th>
                    <th>İşlemler</th>
                    
                </tr>
                @foreach($mulakatsorulariliste as $mulakatsorulari)
                
                <tr>
                    <td>{{ $mulakatsorulari->soru }}</td>
                    <td><a href="{{url('mulakatsorularisil/'.$mulakatsorulari->id)}}">Sil</a> - <a href="{{url('mulakatsorulariguncelle/'.$mulakatsorulari->id)}}">Güncelle</a></td>
                   
                </tr>
                
                 @endforeach()
            </table>
            @if(isset($mulakatsorulariguncelle))
             <form class="form-horizontal" action=" {{ url('mulakatsorulariguncelle') }} " method="post">
              {{ csrf_field() }}
              <input type="hidden" name="id" value="{{$mulakatsorulariguncelle->id}}">
              <div class="form-group">
                <label class="col-md-4">Soru Adı</label>
                <div class="col-md-4">
                  <input type="text" name="soru" class="form-control" value="{{$mulakatsorulariguncelle->soru}}">
                </div>
                @if ($errors->has('soru'))
             {{ $errors->first('soru') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4 col-md-offset-4">
                  <input type="submit" name="guncelle" class="btn btn-primary" value="Güncelle">
                </div>
              </div>

              
            </form>

            @else
              <form class="form-horizontal" action=" {{ url('mulakatsorularikaydet') }} " method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <label class="col-md-4">Soru Adı</label>
                <div class="col-md-4">
                  <input type="text" name="soru" class="form-control">
                </div>
                @if ($errors->has('soru'))
             {{ $errors->first('soru') }}
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