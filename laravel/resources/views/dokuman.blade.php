@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-file-text-o"></i> Dökuman</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="icon_document_alt"></i>Öğrenci İşlemleri</li>
        <li><i class="fa fa-file-text-o"></i>Dökuman</li>
      </ol>
 <nav class="navbar navbar-default">
   <div >
   <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Dokuman İşlemleri</div>
      <div class="panel-body">
      <form class="form-horizontal" action=" {{ url('/dokumankaydet') }} " method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <label class="col-md-4">Öğrenci No</label>
                <div class="col-md-4">
                  <input type="text" name="ogrenci_id" class="form-control">
                </div>
                @if ($errors->has('ogrenci_id'))
             {{ $errors->first('ogrenci_id') }}
                @endif
                </div>
      <div class="form-group"> 
      <label class="col-md-4">Dosya Yolu</label>
                <div class="col-md-4">
                                      <label for="exampleInputFile"></label>
                                      <input type="file" id="exampleInputFile">
                                      
                                  </div>
                                   </div>
                <div class="form-group">
                <label class="col-md-4 col-md-offset-4">
                  <input type="submit" name="kaydet" class="btn btn-primary" value="Kaydet">
                </div>
              </div>

              
                                  </form>
@endsection