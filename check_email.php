<?php
require "server/functions.php";
$e = $_REQUEST["e"];
$sel_email = "select * from customers where cust_email= '$e'";
$run_email  = mysqli_query($con,$sel_email);
$count = mysqli_num_rows($run_email);
if($count>0)
    echo "Already registered";
function search(products)
      {
          var regex= "/^[A-Za-z]+$/";
      if(products.value.match(regex))
      {
          alert("quiz8");
          return true;
      }
      else
      {
          alert('Please input alphabet characters only');
          return false;
      }
      }