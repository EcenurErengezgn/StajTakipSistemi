 <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="">
                          <i class="icon_house_alt"></i>
                          <span>Admin Paneli</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Staj İşlemleri</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="{{route('stajyeri')}}">Staj Yeri</a></li>                          
                          <li><a class="" href="{{route('stajturu')}}">Staj Türü</a></li>
                           <li><a class="" href="{{route('stajDurumu')}}">Staj Durumu</a></li>
                            <li><a class="" href="{{route('stajDonemi')}}">Staj Dönemi</a></li>
                             <li><a class="" href="{{route('mulakatsorulari')}}">Mülakat Soruları</a></li>
                              <li><a class="" href="{{route('mulakatpuanlamasi')}}">Mülakat Puanlaması</a></li></li>
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Kullanıcı İşlemleri</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="{{route('kullanici')}}">Kullanıcı Bilgileri</a></li>
                          <li><a class="" href="{{route('unvan')}}">Unvan Bilgileri</a></li>
                          <li><a class="" href="{{route('bolum')}}">Bölüm Bilgileri</a></li>
                      </ul>
                  </li>
                    <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_genius"></i>
                          <span>Öğrenci İşlemleri</span>
                     <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="{{route('ogrenci')}}">Öğrenci Bilgileri</a></li>
                          <li><a class="" href="{{route('mufredat')}}">Müfredat Bilgileri</a></li>
                          <li><a class="" href="{{route('duyuru')}}">Duyuru Bilgileri</a></li>
                          <li><a class="" href="{{route('dokuman')}}">Doküman Bilgileri</a></li>
                          <li><a class="" href="{{route('turkiye')}}">Türkiye Haritası</a></li>
                           
                         
                          
                      </ul>
                    </li>
                  
                 
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->