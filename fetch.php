<?php

//fetch.php
include('classes/application_top.php');


    if(isset($_POST["bloodgroup"]))
    {
      $query=$obj->getFilter();
      $brand_filter = implode("','", $_POST["bloodgroup"]);
      $query .= "AND tbl_donarreg IN('".$brand_filter."')
      ";
    }


   $plist=$obj->getDataFilter();


    ?>
