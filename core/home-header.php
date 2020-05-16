<head>
  <link rel="stylesheet" type="text/css" href="../hamburgers-master/dist/hamburgers.css">
</head>
<style>
@media only screen and (max-width:450px) {
 .nav-logo-lab{
margin-left:10px;
 }
}
@media only screen and (min-width:910px) {
  .dropdownformobile{
     display:none;
   }
  /*for propose a lab submenu div*/
  #dev{
  margin-left:50px;
  }
  }

@media only screen and (max-width:910px) {
   .commonmobile{
  display: none;
  }
  }

@media only screen and (max-width:767px) {
   .commonmobile{
  display: block;
  }
.commonmobile{
    width: 100%;
}
.nav-submenu-mobile-class{
margin-top:-180px;
width:100%;
}

.dropdownformobile{
     display:none;
   }
.smallllll{
     display:none;
}
   #imagesdropdown
   {
  display:none;
   }
}

.nav-text{
    color: #009bea;
}
</style>

<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-hide-on-scroll navbar-brand-center" style="background-color: #e0ffff;box-shadow: 0px 2px 30px 2px rgba(0, 0, 0, 0.1);">

  <div class="navbar-wrapper">
    <div class="navbar-header">
      
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item d-md-none nav-logo-lab" id="nav-logo-mobile">
          <a class="nav-link" href="../index.php"><img class="brand-logo" style="width:180px;height:40px;" alt="modern admin logo" src="../app-assets/images/logo/logo.png"> </a>
        </li>

        <li class="nav-item d-md-none" style="position: absolute;right:20px;margin-top:-10px;">
          <a class="nav-link open-navbar-container"  data-toggle="collapse" data-target="#navbar-mobile">
            <button class="hamburger hamburger--emphatic hamburgers-cross-class" style="outline:none;"  id="hamburgers-cross" type="button">
              <span class="hamburger-box"> <span class="hamburger-inner"></span> </span>
            </button>
          </a>
        </li>
      </ul>
    </div>
    
    <div class="navbar-container content">
      <div class="collapse navbar-collapse" id="navbar-mobile">
        
        <ul class="nav navbar-nav mr-auto float-left">
          <li class="nav-item smallllll">
            <a class="nav-link" href="../index.php"><img class="brand-logo" style="width:180px;height:40p;margin-left: 20px;" alt="vlabs-dev-logo" src="../app-assets/images/logo/logo.png"> </a>
          </li>
        </ul>

        <ul class="nav navbar-nav float-right">
          <li class="nav-item dropdown dropdownformobile">
            <button style="background-color:#0c84d1" class="nav-link btn btn-info btn-sm btn-block mr-1 mt-1 white dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">menu</button>

            <div class="dropdown-menu">
              <a class="dropdown-item" href="../about.php"> <span class="mr-1">About-us </span> </a>
              <a class="dropdown-item  nav-link dropdown-toggle" class="Developalabmennuclass" id="Developalabmennu" data-toggle="subdropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="mr-1">Develop a Lab </span>
              </a>

              <script type="text/javascript">
              $(document).ready(function()
              {
               $('.hamburgers-cross-class').click(function()
                {
                if($(this).hasClass('is-active'))
                {
                 $(this).removeClass('is-active');
                }else{
                 $(this).addClass('is-active');
                }
                });


                $('.Developalabmennuclass').hover(function()
                {
                 $(this).show();
                 $('.submenuintabletinclass').show();
                })

                $('.Developalabmennuclass').mouseout(function()
                {
                 $('.submenuintabletinclass').hide();
                })

                $('.submenuintabletinclass').mouseout(function()
                {
                 $('.submenuintabletinclass').hide();
                })

                $(".nav-link-all").on('mouseenter',function(){
                  $(this).css({"background-color":"#009bea","border-radius":"5px","box-shadow":"0px 1px 20px 1px rgba(30, 159, 242, 0.6)"});
                  $(this).children('span').css({"color":"#fff"});
                  $(this).children('.nav-icon-all').css({"color":"#fff"});
                });

                $(".nav-link-all").on('mouseleave',function(){
                  $(this).css({"background-color":"transparent","box-shadow":"none"});
                  $(this).children('span').css({"color":"#009bea"});
                 $(this).children('.nav-icon-all').css({"color":"#009bea"});
                });

              });
              </script>
                              
              <div class="dropdown-menu subdropdown submenuintabletinclass" id="submenuintabletin" style="margin-top:-160px;margin-left: 100px;display: none;">
                <a class="dropdown-item" href="login.php"><i class="la la-edit"></i> Propose a new Lab</a>
                <a class="dropdown-item" href="../document.php"><i class="la la-clipboard"></i> Dev Documentation</a></a>
               </div>

                <a class="dropdown-item">
                  <span class="mr-1">Virtual Labs <sub><span class="badge badge-success"><b>Beta</b></span></sub> </span>
                </a>

                <!-- <a class="dropdown-item">
                <span class="mr-1">Workshops
                </span>
              </a> -->

              <div>
                <a class="dropdown-item"> <span class="mr-1">Gitlab </span> </a>
              </div>
            </div>
          </li>
          
          <li class="dropdown dropdown-user nav-item commonmobile" >
           <!--  <a class="dropdown-toggle nav-link dropdown-user-link header-link nav-link-all" id="nav-link-about" href="../about.php" data-toggle="dropdown" style="padding-left: 15px;">
            <span class="mr-1 nav-text" style="font-weight: 450;">About-us</span>
            </a> -->

            <a class="dropdown-toggle nav-link dropdown-user-link header-link nav-link-all" href="../about.php" style="padding-left: 15px;"><span class="mr-1 nav-text" style="font-weight: 450;">About Us</span></a>
          </li>

          <li class="dropdown dropdown-user nav-item commonmobile">
            <a class="dropdown-toggle nav-link dropdown-user-link header-link nav-link-all" href="#" data-toggle="dropdown" style="padding-left: 15px;">
              <span class="mr-1 nav-text" style="font-weight: 450;">Develop a Lab</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right nav-submenu-mobile-class" id="nav-submenu-mobile"><a class="dropdown-item nav-text nav-link-all" href="login.php"><i class="la la-edit nav-text nav-icon-all"></i><span class="mr-1 nav-text" style="font-weight: 450;"> Propose a new Lab</span></a>
              <a class="dropdown-item nav-text nav-link-all" href="../document.php"><i class="la la-clipboard nav-text nav-icon-all" ></i><span class="mr-1 nav-text " style="font-weight: 450;">Dev Documentation</span></a>
            </div>
          </li>

          <!-- Workshop menu-->
          <!-- <li class="dropdown dropdown-user nav-item commonmobile">
          <a class="dropdown-toggle nav-link dropdown-user-link header-link nav-link-all" href="../labs.php"  target="_blank" style="padding-left: 15px;">
            <span class="mr-1 nav-text" style="font-weight: 450;">Virtual Labs<sub><span class="badge badge-success"><b>Beta</b></span></sub>
            </span>
          </a>
        </li> -->

	<!-- <li class="dropdown dropdown-user nav-item commonmobile">
              <a class="dropdown-toggle nav-link dropdown-user-link header-link nav-link-all" href="../labs_local.php" target="_blank" style="padding-left: 15px;">
                <span class="mr-1 nav-text" style="font-weight: 450;">Virtual Labs 2<sub><span class="badge badge-success"><b>Beta 2</b></span></sub>
                </span>
              </a>
            </li> -->


	<li class="dropdown dropdown-user nav-item commonmobile">
          <a class="dropdown-toggle nav-link dropdown-user-link header-link nav-link-all" href="#" data-toggle="dropdown" style="padding-left: 15px;">
            <span class="mr-1 nav-text" style="font-weight: 450;">Explore Labs <!-- <sub><span class="badge badge-success"><b>Beta</b></span></sub> -->
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right nav-submenu-mobile-class" id="nav-submenu-mobile">
	    <!--<a target="_blank" class="dropdown-item nav-text nav-link-all" href="../labs_local.php"><i class="la la-edit nav-text nav-icon-all"></i><span class="mr-1 nav-text" style="font-weight: 450;">Virtual Labs<sub><span class="badge badge-success"><b>Beta 1</b></span></sub>
            </span></a> -->
            <!-- <a target="_blank" class="dropdown-item nav-text nav-link-all" href="../labs.php"><i class="la la-edit nav-text nav-icon-all" ></i><span class="mr-1 nav-text" style="font-weight: 450;">Labs for evaluation <sub><span class="badge badge-success"><b>Beta 2</b></span></sub>
            </span></a> -->
	    <a target="_blank" class="dropdown-item nav-text nav-link-all" href="../approved_labs.php"><i class="la la-edit nav-text nav-icon-all" ></i><span class="mr-1 nav-text" style="font-weight: 450;">Approved Labs </span></a>
           <a target="_blank" class="dropdown-item nav-text nav-link-all" href="../development_labs.php"><i class="la la-edit nav-text nav-icon-all" ></i><span class="mr-1 nav-text" style="font-weight: 450;">Labs Under Development</span></a>
	    <!-- <a target="_blank" class="dropdown-item nav-text nav-link-all" href="../nitk_labs.php"><i class="la la-edit nav-text nav-icon-all" ></i><span class="mr-1 nav-text" style="font-weight: 450;">NITK Labs for evaluation </span></a> -->
          </div>
        </li>


	  <!-- <li class="dropdown dropdown-user nav-item commonmobile">
              <a class="dropdown-toggle nav-link dropdown-user-link header-link nav-link-all" href="#" data-toggle="dropdown" style="padding-left: 15px;">
                <span class="mr-1 nav-text" style="font-weight: 450;">BootCamp Labs
                </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right nav-submenu-mobile-class" id="nav-submenu-mobile"><a target="_blank" class="dropdown-item nav-text nav-link-all" href="http://vlabs.iitb.ac.in/bootcamp/"><i class="la la-edit nav-text nav-icon-all"></i><span class="mr-1 nav-text" style="font-weight: 450;"> BootCamp Marwadi</span></a>
                <a target="_blank" class="dropdown-item nav-text nav-link-all" href="../vlab_bootcamp/index.php"><i class="la la-clipboard nav-text nav-icon-all" ></i><span class="mr-1 nav-text " style="font-weight: 450;">BootCamp GU</span></a>
                <a target="_blank" class="dropdown-item nav-text nav-link-all" href="../mit_bootcamp.php"><i class="la la-clipboard nav-text nav-icon-all" ></i><span class="mr-1 nav-text " style="font-weight: 450;">BootCamp MIT</span></a>
              </div>
            </li> -->

            <!--<li class="dropdown dropdown-user nav-item commonmobile">
              <a class="dropdown-toggle nav-link dropdown-user-link header-link nav-link-all" href="http://vlabs.iitb.ac.in/bootcamp/" target="_blank" style="padding-left: 15px;">
                <span class="mr-1 nav-text" style="font-weight: 450;">BootCamp 1</span>
              </a>
            </li> -->

        <!-- <li class="dropdown dropdown-user nav-item commonmobile">
          <a class="dropdown-toggle nav-link dropdown-user-link header-link nav-link-all" href="http://vlabs.iitb.ac.in/vlab/vlabs-dev/index.php"  target="_blank" style="padding-left: 15px;">
            <span class="mr-1 nav-text" style="font-weight: 450;">Workshops
            </span>
          </a>
        </li> -->

        <li class="dropdown dropdown-user nav-item commonmobile">
          <a class="dropdown-toggle nav-link dropdown-user-link header-link nav-link-all" href="http://vlabs.iitb.ac.in/gitlab/users/sign_in"  target="_blank" style="padding-left: 15px;">
            <span class="mr-1 nav-text" style="font-weight: 450;">Gitlab
            </span>
          </a>
        </li>


	    <!-- <li class="dropdown dropdown-user nav-item commonmobile">
          <a class="dropdown-toggle nav-link dropdown-user-link header-link nav-link-all" href="../mooc.php" style="padding-left: 15px;">
            <span class="mr-1 nav-text" style="font-weight: 450;">MOOC
            </span>
          </a>
        </li> -->

	<li class="dropdown dropdown-user nav-item commonmobile">
          <a class="dropdown-toggle nav-link dropdown-user-link header-link nav-link-all" href="#" data-toggle="dropdown" style="padding-left: 15px;">
            <span class="mr-1 nav-text" style="font-weight: 450;">MOOC</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right nav-submenu-mobile-class" id="nav-submenu-mobile">
      
            <a class="dropdown-item nav-text nav-link-all" href="../mooc.php"><i class="la la-edit nav-text nav-icon-all" ></i><span class="mr-1 nav-text" style="font-weight: 450;">MOOC Training</span></a>
           <a class="dropdown-item nav-text nav-link-all" href="../training.php"><i class="la la-edit nav-text nav-icon-all" ></i><span class="mr-1 nav-text" style="font-weight: 450;">Technical Training</span></a>
          </div>
        </li>

	<!-- <li class="dropdown dropdown-user nav-item commonmobile">
              <a class="dropdown-toggle nav-link dropdown-user-link header-link nav-link-all" href="../webinar.php"  target="_blank" style="padding-left: 15px;">
                <span class="mr-1 nav-text" style="font-weight: 450;">Webinar
                </span>
              </a>
            </li> -->

	
	<li class="dropdown dropdown-user nav-item commonmobile">
              <a class="dropdown-toggle nav-link dropdown-user-link header-link nav-link-all" href="#" data-toggle="dropdown" style="padding-left: 15px;">
                <span class="mr-1 nav-text" style="font-weight: 450;"> Webinar </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right nav-submenu-mobile-class" id="nav-submenu-mobile"><a target="_blank" class="dropdown-item nav-text nav-link-all" href="../webinar_MIT.php"><i class="la la-edit nav-text nav-icon-all"></i><span class="mr-1 nav-text" style="font-weight: 450;"> MIT Webinar</span></a>
                <a target="_blank" class="dropdown-item nav-text nav-link-all" href="../webinar_GU.php"><i class="la la-clipboard nav-text nav-icon-all" ></i><span class="mr-1 nav-text " style="font-weight: 450;">GU Webinar</span></a>
              </div>
            </li>

		<!-- <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" target="_blank" href="http://btech.mit.asia/bootcamp/">
                <button type="submit" style="height:35px;padding-top: 5px;padding-bottom : 5px;padding-left: 10px;padding-right: 10px;" name="login"class="btn btn-warning btn-block"><b style="font-size: 16px;">BootCamp</b></button>
              </a>
            </li> -->

        <a class="dropdown-toggle nav-link dropdown-user-link" href="../auth/login.php">
          <li class="dropdown dropdown-user nav-item">
            <button type="submit" style="height:35px;padding-top: 5px;padding-bottom : 5px;padding-left: 10px;padding-right: 10px;" name="login"class="btn btn-info btn-block"><b><i class="ft-unlock"></i>Login</b></button>
        </a>
      </li>
    </ul>
  </li>
</ul>
</div>
</div>
</div>
</nav>
