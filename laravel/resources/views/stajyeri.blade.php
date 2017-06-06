@extends('layouts.master')
@section('content')


<style type="text/css">
#ilce {
 position: absolute;

      left: 620px;
      top: 370px;
      width: 500px;

}

#il {
 position: absolute;

      left: 620px;
      top: 315px;

}

</style>
{!!Html::style('../resources/assets/css/bootstrap.css')!!}
{!!Html::style('../resources/assets/css/bootstrap.min.css')!!}

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-file-text-o"></i> Staj Yeri </h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="icon_document_alt"></i>Staj İşlemleri</li>
        <li><i class="fa fa-file-text-o"></i>Staj Yeri</li>
      </ol>
      


  <nav class="navbar navbar-default">
   <div >
   <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Staj Yeri Ekleme</div>
      <div class="panel-body">
      <form class="form-horizontal" action="{{ route('stajyerikaydet')}}" method="POST">
             {{ csrf_field() }}
              
               <div class="form-group">
                <label class="col-md-4">Adı</label>
                <div class="col-md-4">
                  <input type="text" name="adi"
                  id="adı" class="form-control" >
                </div>
                @if ($errors->has('adi'))
             {{ $errors->first('adi') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4">Faks</label>
                <div class="col-md-4">
                  <input type="text" name="faks"
                  id="faks" class="form-control" >
                </div>
                @if ($errors->has('faks'))
             {{ $errors->first('faks') }}
                @endif
                </div>
                <div class="form-group">
                <label class="col-md-4">Web Adresi</label>
                <div class="col-md-4">
                  <input type="text" name="webadresi"
                  id="webadresi" class="form-control" >
                </div>
                @if ($errors->has('webadresi'))
             {{ $errors->first('webadresi') }}
                @endif
                </div>
                 <div class="form-group">
                <label class="col-md-4">Telefon No</label>
                <div class="col-md-4">
                  <input type="text" name="telno"
                  id="telno" class="form-control" >
                </div>
                @if ($errors->has('telno'))
             {{ $errors->first('telno') }}
                @endif
                </div>
               
                <div class="form-group">
                <label class="col-md-4">İl</label>
                <div id="il" >
                <select name="il_id" id="il_id"  style="width:260%;">
                  @foreach($muh_iller as $iller)
                   <option value="{{ $iller->id }}"  > {{ $iller->baslik }}</option>
                   @endforeach
                </select>
                </div>
                </div>
                
                <div class="form-group">
                <label class="col-md-4">İlçe</label>
                <div id="ilce" >
                <select name="ilce_id" id="ilce_id"  style="width:70%;">
                  @foreach($muh_ilceler as $ilceler)
                   <option value="{{ $ilceler->id }}"  > {{ $ilceler->baslik }}</option>
                   @endforeach
                </select>
                </div>
                </div>
                
                <div class="form-group">
                <label class="col-md-4 col-md-offset-4">
                  <input type="submit" name="kaydet" class="btn btn-primary" value="Kaydet">
                </div>
              </div>

              
            </form>
                 <br/><br/>
               <div >
              
                  <form action="{{url('stajyeri')}}" method="get" id="arama" class="form-horizontal">
                  <div class="input-group custom-search-form">
                    <input type="text" name="arama" class="form-control" placeholder="Staj Yeri Adresi veya Adı ile arama .." id="arama">
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-default-sm" 
                    >
                    <i class="fa fa-search"></i></button>
                    </span>
                    </div>
                    
                  </form>
                  <div>
                </div>
                </div>
                  <div class="panel-body">
                  Staj Yeri Listeleme</div>
                  <div class="panel-body">
                

            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Adı</th>
                    <th>Faks</th>
                    <th>Web Adresi</th>
                     <th>Telefon Numarası</th>
                      <th>İl Adı</th>
                       <th>İlçe Adı</th>
                    <th>İşlemler</th>
                    
                </tr>
                </thead>
                 <tbody>
                
                </tbody>
                </table>
                 <tfoot>
                 <tr>
                
                 {{ $staj_yeri->render() }}
                 </tr>
                 </tfoot>

                  
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <script type="text/javascript">
                    $('#arama').on('keyup',function(){
                        $value=$(this).val();
                        $.ajax({
                          type : 'get',
                          url : '{{URL::to('stajyeri')}}'
                          data : {'arama':$value},
                          success:function(data){
                              $('tbody').html(data);

                          }
                        });
                    })
                    $('#baslik').autocomplete({
                      source : '{!!URL::route('stajyerikaydet')!!}',
                      minlength:1,
                      autoFocus:true,
                      select:function(e,ui){
                        alert(ui);
                      }
                    })
                    </script>

           

@endsection
