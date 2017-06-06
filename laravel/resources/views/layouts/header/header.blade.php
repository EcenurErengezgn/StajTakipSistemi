      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Menu" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <a href="index.html" class="logo">Staj Takip Sistemi <span class="lite">Admin </span></a>

            <div class="nav search-row" id="top_menu">
                <ul class="nav top-menu">                    
                                     
                </ul>      
            </div>

            <div class="top-nav notification-row">                
                <ul class="nav pull-right top-menu">
                    
                    <li id="task_notificatoin_bar" class="dropdown">
                       
                    
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            
                            <span class="username">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="{{ route('kullaniciBilgisi') }}"><i class="icon_profile"></i> Kullanıcı Bilgileri</a>
                            </li>
                        
                           
                            <li>
                                <a href="{{ route('logout') }}"><i class="icon_key_alt"></i> Çıkış Yap</a>
                            </li>
                            
                            
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
   