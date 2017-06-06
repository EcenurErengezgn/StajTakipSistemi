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
			<div class="panel-heading">Kullanici Listesi</div>
			<div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th>Adi</th>
                    <th>Soyadi</th>
                    <th>TC No</th>
                    <th>Email</th>
                    <th>Parola</th>
                    <th>Bölüm</th>
                    <th>Unvan</th>
                    <th>İşlemler</th>
                </tr>
                @foreach($kullaniciliste as $kullanici)
                
                <tr>
                    <td>{{ $kullanici->adi }}</td>
                    <td>{{ $kullanici->soyadi }}</td>
                    <td>{{ $kullanici->tc_no }}</td>
                    <td>{{ $kullanici->email }}</td>
                    <td>{{ $kullanici->sifre }}</td>
                    <td>{{ $kullanici->bol_adi }}</td>
                    <td>{{ $kullanici->un_adi }}</td>
                    <td><a href="{{url('/kullanicisil/'.$kullanici->id)}}">Sil</a> - <a href="{{url('/kullaniciguncelle/'.$kullanici->id)}}">Güncelle</a></td>
                </tr>
                
                 @endforeach()
            </table>
            @if(isset($kullaniciguncelle))
                <form class="form-horizontal" action=" {{ url('/kullaniciguncelle') }} " method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$kullaniciguncelle->id}}">
                <div class="form-group">
                    <label class="col-md-4">Adi</label>
                    <div class="col-md-4">
                        <input type="text" name="adi" class="form-control" value="{{$kullaniciguncelle->adi}}">
                    </div>
                    @if ($errors->has('adi'))
             {{ $errors->first('adi') }}
                    @endif
                </div>
                <div class="form-group">
                    <label class="col-md-4">Soyadi</label>
                    <div class="col-md-4">
                        <input type="text" name="soyadi" class="form-control" value="{{$kullaniciguncelle->soyadi}}">
                    </div>
                    @if ($errors->has('soyadi'))
             {{ $errors->first('soyadi') }}
                    @endif
                </div>
                <div class="form-group">
                    <label class="col-md-4">TC no</label>
                    <div class="col-md-4">
                        <input type="text" name="tc_no" class="form-control" value="{{$kullaniciguncelle->tc_no}}">
                    </div>
                @if ($errors->has('tc_no'))
             {{ $errors->first('tc_no') }}
                    @endif
                </div>
                <div class="form-group">
                    <label class="col-md-4">Email</label>
                    <div class="col-md-4">
                        <input type="text" name="email" class="form-control" value="{{$kullaniciguncelle->email}}">
                    </div>
                    @if ($errors->has('email'))
             {{ $errors->first('email') }}
                    @endif
                </div>
                <div class="form-group">
                    <label class="col-md-4">Parola</label>
                    <div class="col-md-4">
                        <input type="text" name="sifre" class="form-control" value="{{$kullaniciguncelle->sifre}}">
                    </div>
                    @if ($errors->has('sifre'))
             {{ $errors->first('sifre') }}
                    @endif
                </div>
                <div class="form-group">
                    <label class="col-md-4">Bölüm</label>
                    <div class="col-md-4">
                    <select class="form-control input-sm" name="bolum" id="bolum" value="{{$kullaniciguncelle->bol_adi}}">
                    @foreach($kullaniciliste as $kullanici)
                        <option value="{{$kullanici->bolum_id}}">{{$kullanici->bol_adi}}</option>
                    @endforeach
                    </select>
                    </div>
                    @if ($errors->has('bolum'))
             {{ $errors->first('bolum') }}
                    @endif
                </div>
                
                <div class="form-group">
                    <label class="col-md-4">Unvan</label>
                    <div class="col-md-4">
                    <select class="form-control input-sm" name="unvan" id="unvan" value="{{$kullaniciguncelle->un_adi}}">
                    @foreach($kullaniciliste as $kullanici)
                        <option value="{{$kullanici->unvan_id}}">{{$kullanici->un_adi}}</option>
                    @endforeach
                    </select>
                    </div>
                    @if ($errors->has('unvan'))
                    {{ $errors->first('unvan') }}
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

            <form class="form-horizontal" action=" {{ url('/kullanicikaydet') }} " method="post">
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
            		<label class="col-md-4">Soyadi</label>
            		<div class="col-md-4">
            			<input type="text" name="soyadi" class="form-control">
            		</div>
            		@if ($errors->has('soyadi'))
             {{ $errors->first('soyadi') }}
             		@endif
            	</div>
            	<div class="form-group">
            		<label class="col-md-4">TC no</label>
            		<div class="col-md-4">
            			<input type="text" name="tc_no" class="form-control">
            		</div>
            	@if ($errors->has('tc_no'))
             {{ $errors->first('tc_no') }}
             		@endif
            	</div>
            	<div class="form-group">
            		<label class="col-md-4">Email</label>
            		<div class="col-md-4">
            			<input type="text" name="email" class="form-control">
            		</div>
            		@if ($errors->has('email'))
             {{ $errors->first('email') }}
             		@endif
            	</div>
            	<div class="form-group">
            		<label class="col-md-4">Parola</label>
            		<div class="col-md-4">
            			<input type="text" name="sifre" class="form-control">
            		</div>
            		@if ($errors->has('sifre'))
             {{ $errors->first('sifre') }}
             		@endif
            	</div>
            	<div class="form-group">
                    <label class="col-md-4">Unvan</label>
                    <div class="col-md-4">
                        <input type="text" name="unvan" class="form-control">
                    </div>
                    @if ($errors->has('unvan'))
             {{ $errors->first('unvan') }}
                    @endif
                </div>
            	
            	<div class="form-group">
                    <label class="col-md-4">Bölüm</label>
                    <div class="col-md-4">
                        <input type="text" name="bolum" class="form-control">
                    </div>
                    @if ($errors->has('bolum'))
             {{ $errors->first('bolum') }}
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