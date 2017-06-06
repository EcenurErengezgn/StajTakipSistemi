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
     <div class="container">
     <div class="panel panel-default">
      <div class="panel-heading">
         <div class="panel-heading">
        <h4>Duyuru </h4>
      </div>
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
</body>
</html>

@endsection