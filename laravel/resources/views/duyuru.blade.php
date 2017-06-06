@extends('layouts.master')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    {!!Html::style('../resources/assets/css/bootstrap.css')!!}
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
	<script src="/js/ckeditor/ckeditor.js"></script>
	<script src="/js/ckeditor/config.js"></script>

</head>
<body>

     <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-file-text-o"></i> Duyuru</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="icon_document_alt"></i>Öğrenci İşlemleri</li>
        <li><i class="fa fa-file-text-o"></i>Duyuru</li>
      </ol>
 
   
              
      
      <nav class="navbar navbar-default">
   <div >
   <div class="panel-heading">
        <h4>Duyuru Ekleme</h4>
      </div>
      <form id="#form" action="{{ route('duyurukaydet')}}" method="post" data-parsley-validate class="form horizontal form-label-left">
      {{csrf_field()}}
      
      
      <div class="form-group">
      <label class="control-label col-md-3 col-xs-12" for="baslik">Başlık
      <span class="required">*</span>
      </label>
      </div>
      <div class="col-md-6 col-xs-12">
      <input type="text" id="baslik" name="baslik" required="required" class="form-control col-md-7 col-xs-12">
      </div>
      </div>
      <br/>
      <br/>
      <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="icerik">İçerik
      <span class="required">*</span>
      </label>
      <div class="col-md-6 col-md-6 col-xs-12">
      <textarea type="text" id="icerik" name="icerik" required="required" class="form-control ckeditor col-md-7 col-xs-12"></textarea>
      <br/>
      
      
      </div>
      </div>

      

      <div class="ln_solid"></div>
      <div class="form-group">
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
      <button type="reset" class="btn btn-primary">İPTAL</button>
      <button type="submit" class="btn btn-success">KAYDET</button>
      </div>
      </div>
      </form>
      </div>
      </div>

      </nav>
      <div class="container">
     <div class="panel panel-default">
      <div class="panel-heading">
        <h4>Duyuru Listesi</h4>
      </div>
      <div class="panel-body">
        <table class="table table-striped">
               <thead>
                 <tr>
                 <th>Başlık</th>
                 <th>İçerik</th>
                 <th>İşlemler</th>
                 </tr>
               </thead>
               <tbody>
                 @foreach($data as $key => $d)
                 <tr>
                  <td>{!!$d->baslik!!}</td>
                  <td>{!!str_limit($d->icerik,200)!!}</td>
                  <td>
                  <a href="{{url('duyurugoruntule',array($d->id))}}">Görüntüle</a> | <a href="{{url('duyuruduzenle',array($d->id))}}">Güncelle</a> | <a href="{{url('duyurusil',array($d->id))}}">Sil</a> 
                  </td>

                 </tr>
                 @endforeach
               </tbody>

        </table>
      </div>
    </div>
    </div>
@endsection

@section('js')
<script>
       $(document).ready(function() {
          
            beforeSerialize: function() {
              for ( instance in CKEDITOR.instances )
    CKEDITOR.instances[instance].updateElement();
              $('#form').serialize();
            }
      });
</script>

 @stop
