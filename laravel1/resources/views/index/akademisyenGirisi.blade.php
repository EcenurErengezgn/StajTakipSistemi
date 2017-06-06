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
                    <li><a href="/kullanici">Öğrenci Bilgileri</a></li>
                    <li><a href="">Müfredat Durumu Bilgileri</a></li>
                </ul>
            </li>
   </ul>

</nav>


 
@endsection
