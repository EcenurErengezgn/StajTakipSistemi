@extends('index.home')
@section('content')
<nav class="navbar navbar-default">
 <ul>
         
<p style="color:red">Öğrenci No</p>
<p style="color:red">TC-Kimlik No</p>
<p style="color:red">Adı Soyadı</p>
<p style="color:red">Bölüm</p>
<p style="color:red">Sınıf</p>

</ul>
</nav>

<nav class="navbar navbar-default">

 <div id="nav">
 <ul>
 	@foreach($menuliste as $menu)

 		
          <a href="{{url('/kullanicisil/'.$menu->id)}}">{{ $menu->adi }}</a><br>
          @foreach ($kullanicilar as $k)
    {{ $k->adi }} <br>
@endforeach
           
       
          </ul>
           
@endforeach
</ul>

 </div>

</nav>


 
@endsection


