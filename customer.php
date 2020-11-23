<?php  
 $connect = mysqli_connect("localhost", "id15473759_root", "Bindu999@123", "id15473759_bankingdb");    
 $query = "SELECT * FROM bankingman";  
 $result = mysqli_query($connect, $query);  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!--meta tab-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	
	<!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<style> .nav-item:hover{
    background-color:black;
    color:white;
}
    </style>
    <link rel="stylesheet" href="css/styles.css">
<title>Customers</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
           <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active" ><a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="transaction.php"><span class="fa fa-info fa-lg"></span> Transaction Details</a></li>
                    
<!--                    <li class="nav-item"><a class="nav-link" href="contact.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>-->
				</ul>
				
            </div>           
        </div>
    </nav>
    
   <br>
 
        <div id="viewModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg" role="content">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Account Details</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body" id="account_details">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning btn-sm ml-auto" name="submit" style="text-decoration:none"><a id="t" href="transfer.php"><b>Transfer<b></a></button>
                        <button type="button" class="btn btn-danger btn-sm ml-1" name="submit" data-dismiss="modal"> Cancel</button>
                        
                    </div>
                </div>
            </div>
        </div>
    


        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark"> 
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Account Number</th>
                    <th scope="col">Details</th>
                </tr>
                </thead>
                <?php  
                while($row = mysqli_fetch_array($result))  
                {  
                ?>  
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["Name"]; ?></td>
                    <td><?php echo $row["Accountno"]; ?></td>
                    <td><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view-details" /></td>  
                </tr>  
                <?php  
                }  
                ?>  
            </table>

        </div>
    </div>

<br>
<br>
<br>
     
	
</body>



</html>
<script>
$(document).ready(function(){
    $('.view-details').click(function(){
        var userid=$(this).attr("id");
        $.ajax({
            url:"select.php",
            method:"post",
            data:{userid:userid},
            success:function(data){
                $('#account_details').html(data);
                $('#viewModal').modal("show");
            }
          });
    });
});
</script>
