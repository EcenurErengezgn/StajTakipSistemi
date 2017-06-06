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
  <nav class="navbar navbar-default">
   <div >
   <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Staj Durumu Listesi</div>
      <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th>Adi</th>
                    <th>İşlemler</th>
                    
                </tr>
                @foreach($stajDurumuliste as $stajDurumu)
                
                <tr>
                    <td>{{ $stajDurumu->adi }}</td>
                    <td><a href="{{url('/stajDurumusil/'.$stajDurumu->id)}}">Sil</a> - <a href="{{url('/stajDurumuguncelle/'.$stajDurumu->id)}}">Güncelle</a></td>
                   
                </tr>
                
                 @endforeach()
            </table>
            @if(isset($stajDurumuguncelle))
             <form class="form-horizontal" action=" {{ url('/stajDurumuguncelle') }} " method="post">
              {{ csrf_field() }}
              <input type="hidden" name="id" value="{{$stajDurumuguncelle->id}}">
              <div class="form-group">
                <label class="col-md-4">Adi</label>
                <div class="col-md-4">
                  <input type="text" name="adi" class="form-control" value="{{$stajDurumuguncelle->adi}}">
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
              <form class="form-horizontal" action=" {{ url('/stajDurumukaydet') }} " method="post">
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