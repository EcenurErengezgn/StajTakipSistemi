@extends('index.home')
@section('content')

<nav class="navbar navbar-default">
 <ul>
         

<p style="color:red">TC-Kimlik No</p>
<p style="color:red">Adı Soyadı</p>
<p style="color:red">Bölüm</p>
<p style="color:red">Unvan</p>

</ul>
</nav>
<nav class="navbar navbar-default">

<div >
  <ul>
            <li><a href="">Genel İşlemler</a>
                <ul>
                    <li><a href="">Kullanıcı Bilgileri</a></li>
                
                </ul>
            </li>
   </ul>
    <ul>
   <li><a href="">Kullanıcı İşlemler</a>
                <ul>
                    <li><a href="/unvan">Unvan Bilgileri</a></li>
                    <li><a href="/bolum">Bolum Bilgileri</a></li>
                
                </ul>
            </li>
   </ul>

  <ul>
            <li><a href="">Staj İşlemleri</a>
                <ul>
                    <li><a href="/stajTuru">Staj Türü Bilgileri</a></li>
                    <li><a href="/stajDurumu">Staj Durumu Bilgileri</a></li>
                    <li><a href="/stajYeri">Staj Yeri Bilgileri</a></li>
                    <li><a href="/stajDonemi">Staj Dönemi Bilgileri</a></li>
                    <li><a href="/dokuman">Doküman Bilgileri</a></li>
                </ul>
         </li>
   </ul>
   <ul>
            <li><a href="">Duyuru İşlemleri</a>
                <ul>
                    <li><a href="">Duyuru Bilgileri</a></li>
                </ul>
            </li>
   </ul>
    <ul>
            <li><a href="">Öğrenci İşlemleri</a>
                <ul>
                    <li><a href="">Öğrenci Bilgileri</a></li>
                    <li><a href="">Müfredat Durumu Bilgileri</a></li>
                </ul>
            </li>
   </ul>
  </nav>
<!DOCTYPE html>
<html>
<head>
	<title>staj sistemi</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">Staj Yeri Listesi</div>
			<div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th>Adi</th>
                    <th>Faks</th>
                    <th>Web Adresi</th>
                    <th>Telefon Numarası</th>
                    <th>İl</th>
                    <th>İlçe</th>
                    <th>İşlemler</th>
                </tr>
                @foreach($stajYeriliste as $stajYeri)
                
                <tr>
                    <td>{{ $stajYeri->adi }}</td>
                    <td>{{ $stajYeri->faks }}</td>
                    <td>{{ $stajYeri->webadresi }}</td>
                    <td>{{ $stajYeri->telno }}</td>
                    <td>{{ $stajYeri->il_id}}</td>
                    <td>{{ $stajYeri->ilce_id }}</td>
                    <td><a href="{{url('/stajYerisil/'.$stajYeri->id)}}">Sil</a> - <a href="{{url('/stajYeriguncelle/'.$stajYeri->id)}}">Güncelle</a></td>
                </tr>
                
                 @endforeach()
            </table>
            @if(isset($stajYeriguncelle))
                <form class="form-horizontal" action=" {{ url('/stajYeriguncelle') }} " method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$stajYeriguncelle->id}}">
                <div class="form-group">
                    <label class="col-md-4">Adi</label>
                    <div class="col-md-4">
                        <input type="text" name="adi" class="form-control" value="{{$stajYeriguncelle->adi}}">
                    </div>
                    @if ($errors->has('adi'))
             {{ $errors->first('adi') }}
                    @endif
                </div>
                <div class="form-group">
                    <label class="col-md-4">Faks</label>
                    <div class="col-md-4">
                        <input type="text" name="faks" class="form-control" value="{{$stajYeriguncelle->faks}}">
                    </div>
                    @if ($errors->has('faks'))
             {{ $errors->first('faks') }}
                    @endif
                </div>
                <div class="form-group">
                    <label class="col-md-4">Web Adresi/label>
                    <div class="col-md-4">
                        <input type="text" name="webadresi" class="form-control" value="{{$stajYeriguncelle->webadresi}}">
                    </div>
                @if ($errors->has('webadresi'))
             {{ $errors->first('webadresi') }}
                    @endif
                </div>
                <div class="form-group">
                    <label class="col-md-4">Telefon Numarası</label>
                    <div class="col-md-4">
                        <input type="text" name="telno" class="form-control" value="{{$stajYeriguncelle->telno}}">
                    </div>
                    @if ($errors->has('telno'))
             {{ $errors->first('telno') }}
                    @endif
                </div>
                <div class="form-group">
                    <label class="col-md-4">İl</label>
                    <div class="col-md-4">
                        <input type="text" name="il_id" class="form-control" value="{{$stajYeriguncelle->il_id}}">
                    </div>
                    @if ($errors->has('il_id'))
             {{ $errors->first('il_id') }}
                    @endif
                </div>
                 
                 <div class="form-group">
                    <label class="col-md-4">İlçe</label>
                    <div class="col-md-4">
                        <input type="text" name="ilce_id" class="form-control" value="{{$stajYeriguncelle->ilce_id}}">
                    </div>
                    @if ($errors->has('ilce_id'))
             {{ $errors->first('ilce_id') }}
                    @endif
                </div>
                <div class="form-group">
                    <label class="col-md-4 col-md-offset-4">
                        <input type="submit" name="guncelle" class="btn btn-primary" value="Güncelle">
                    </div>
                </div>

                
            </form>

            </form>
            @else()

            <form class="form-horizontal" action=" {{ url('/stajYerikaydet') }} " method="post">
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
            		<label class="col-md-4">Faks</label>
            		<div class="col-md-4">
            			<input type="text" name="faks" class="form-control">
            		</div>
            		@if ($errors->has('faks'))
             {{ $errors->first('faks') }}
             		@endif
            	</div>
            	<div class="form-group">
            		<label class="col-md-4">Web Adresi</label>
            		<div class="col-md-4">
            			<input type="text" name="webadresi" class="form-control">
            		</div>
            	@if ($errors->has('webadresi'))
             {{ $errors->first('webadresi') }}
             		@endif
            	</div>
            	<div class="form-group">
            		<label class="col-md-4">Telefon Numarası</label>
            		<div class="col-md-4">
            			<input type="text" name="teno" class="form-control">
            		</div>
            		@if ($errors->has('telno'))
             {{ $errors->first('telno') }}
             		@endif
            	</div>
            	<div class="form-group">
            		<label class="col-md-4">İl</label>
            		<div class="col-md-4">
            			<input type="text" name="il_id" class="form-control">
            		</div>
            		@if ($errors->has('il_id'))
             {{ $errors->first('il_id') }}
             		@endif
            	</div>
            	<div class="form-group">
                    <label class="col-md-4">İlçe</label>
                    <div class="col-md-4">
                        <input type="text" name="ilce_id" class="form-control">
                    </div>
                    @if ($errors->has('ilce_id'))
             {{ $errors->first('ilce_id') }}
                    @endif
                </div>
            	
            	
            	

            	
            	<div class="form-group">
            		<label class="col-md-4 col-md-offset-4">
            			<input type="submit" name="kaydet" class="btn btn-primary" value="Kaydet">
            		</div>
            	</div>

            	
            </form>

            </form>
        @endif()
			</div>
		</div>
	</div>
</body>
</html>
@endsection