<?php

if(isset($_GET["page"])){
  $page =$_GET["page"] ;
  Switch($page){
    case "iletisim":
      require "contact.php";
      break;
    case "hakkimizda":
      require "about.php";
      break;
    default:
      // 404
      break;
  }
}else{
  require "home.php";
}
