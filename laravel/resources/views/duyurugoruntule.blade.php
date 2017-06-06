@extends('layouts.master')
@section('content')

<!DOCTYPE html>
<html>
<head>
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
        <h4>Duyuru </h4>
      </div>
      <div class="panel-body">
        <h1>{!!$data->baslik!!}</h1>
        <hr>
        {!!$data->icerik!!}
      </div>
    </div>
    </div>
</body>
</html>

@endsection