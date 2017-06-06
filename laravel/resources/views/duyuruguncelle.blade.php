@if(isset($duyuruguncelle))
              <nav class="navbar navbar-default">
             <div >
             <div class="container">
              <div class="panel panel-default">
             <form class="form-horizontal" action=" {{ url('/duyuruguncelle') }} " method="post">
              {{ csrf_field() }}
              
                <div class="form-group">
                <label class="col-md-4 col-md-offset-4">
                  <input type="submit" name="guncelle" class="btn btn-primary" value="Güncelle">
                </div>
              </div>

              
            </form>
            </label>
            </div>
            </form>
            </div>
            </div>
            </div>
            </nav>
            @else
            