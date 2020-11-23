<?php

 $username='id15473759_root';
 $password='Bindu999@123';
 $server='localhost';
 $db='id15473759_bankingdb';


 $con=mysqli_connect($server,$username,$password,$db);
 if($con){
     ?><script>
        alert('Connection Successful');
        </script>
    <?php
    }else{
        ?><script>
        alert('no Connection');
        </script>
    <?php
    }
?>