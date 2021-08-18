<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
//session_start();
//include('header.php');
// Set Language variable
if(isset($_POST['lang']) && !empty($_POST['lang'])){
 $_SESSION['lang'] = $_POST['lang'];

 if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_POST['lang']){
  echo "<script type='text/javascript'> location.reload(); </script>";
 }
}

// Include Language file
if(isset($_SESSION['lang'])){
 include "lang_".$_SESSION['lang'].".php";
}else{
 include "lang_en.php";
}
require_once('header.php');
?>
<body>
    <script>
 function changeLang(){
  document.getElementById('form_lang').submit();
 }
 </script>
   <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position:sticky;position: -webkit-sticky;
  top: 0;z-index:1; ">
        <div class="container text-center">
            
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
               <ul class="navbar-nav menulink">
                  <li class="nav-item">
                     <a class="nav-link" href="index.php"><?=_HOME ?></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="document.php"><?=_DOCUMENT ?></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="https://nipn.cdr.gov.la"><?=_ABOUT ?></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="https://nipn-dashboard.firebaseapp.com/"><?=_DASHBOARD ?></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="login.php"><?=_LOGIN ?></a>
                  </li>
                </ul>
            </div>

             <form method='post' action='' id='form_lang' style="padding-top:5px;">
   <select name='lang' onchange='changeLang();' >
   <option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?> >English</option>
   <option value='la' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'la'){ echo "selected"; } ?> >Lao</option>
  </select>
 </form>
          
        </div>
    </nav>
<div style="background-image: url('img/grid.png');
    will-change: transform;background-repeat:repeat-x;">
<div class="container" style="margin-top: 10px;">
	
	<div class="row">
	    <div class="col-sm-3 d-none d-sm-block">
	        <div class="m-nav" style="background-color:#E9ECEF; padding:15px;position: fixed;position: -webkit-sticky;
  /* required */border: 1px solid rgba(0,0,0,0.125);border-radius: 0.25rem;font-family: 'Noto Sans Lao',Segoe UI, sans serif,Phetsarath OT;">
	             <a class="m-nav" href="#"><?=_introduction ?></a><br/>
	             <a class="m-nav" href="#start"><?=_gettingstart ?></a><br/>
	             <a class="m-nav" href="#how"><?=_howthesearchwork ?></a> <br/>
	             <a class="m-nav" href="#"><?=_howtoviz ?></a><br/>
	             <a class="m-nav" href="#export"><?=_exportgraph ?></a><br/>
	             <a class="m-nav" href="#sourced"><?=_datasource ?></a><br/>
	             <a class="m-nav" href="#abb"><?=_abbreviation ?></a><br/>
	             <a class="m-nav" href="#org"><?=_listoforganization ?></a><br/>
	             <a class="m-nav" href="#cont"><?=_contactteam ?></a><br/>
	             <a class="m-nav" href="#api"><?=_API ?></a><br/>
	        
	        </div>
	       
	        
	        
	    </div>
		<div class="col-sm-9 m-text" id="documenttxt">
			<h5 class="m-h5"><?=_introduction ?></h5>
			<p><?=_introductiontxt ?></p>
			<div class="text-center"> <img class="img-fluid" src="img/screen1.png" width="650"> </div>
			<h5 class="m-h5"> <?=_gettingstart ?></h5>
			<p id="start"><?=_gettingstarttxt?> </p>
			<h5 class="m-h5"> <?=_howthesearchwork ?> </h5>
			<p id="how"><?=_howthesearchworktxt?>  </p>
			<h5 class="m-h5"> <?=_exportgraph ?> </h5>
			<p id="export"><?=_exportgraphtxt?>  </p>
         <h5 class="m-h5"><?=_datasource ?></h5>
         <p id="sourced"><?=_datasourcetxt?></p>
         <h5 class="m-h5"><?=_abbreviation ?></h5>
         <p id="abb"><?=_abbreviationtxt?></p>
         <h5 class="m-h5"><?=_listoforganization ?></h5>
         <p id="org"><?=_listoforganizationtxt?></p>
         <h5 class="m-h5"><?=_contactteam ?></h5>
         <p id="cont"><?=_contactteamtxt?></p>
			<h5 class=m-h5>API</h5>
			<p id="api">Comming soon...</p>
		</div>
		
	</div>
</div>
</div>

</body>
