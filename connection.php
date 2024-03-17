<?php

  $database= new mysqli("localhost","root","","khdmati");
  if ($database->connect_error){
    die("Connection failed:  ".$database->connect_error);
  }

