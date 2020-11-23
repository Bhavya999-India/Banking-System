<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/styles.css">
<title>Transaction Details</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
           <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="customer.php" ><span class="fa fa-info fa-lg"></span> Customers</a></li>
				</ul>
				<br>
				<br>
				
                </div>           
        </div>
	</nav>


    <script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Abhi"){
				 var arr=["Prasad","Manisha","Pramila","Pramod","Mahadev","Vasudev","PrasannaAbhi","Pradeep","Sowmya"];
				 }
				 else if(a==="Prasad"){
					var arr=["Abhi","Manisha","Pramila","Pramod","Mahadev","Vasudev","PrasannaAbhi","Pradeep","Sowmya"];
				}
				else if(a==="Manisha"){
					var arr=["Prasad","Abhi","Pramila","Pramod","Mahadev","Vasudev","PrasannaAbhi","Pradeep","Sowmya"];
				}
				else if(a==="Pramila"){
					var arr=["Prasad","Manisha","Abhi","Pramod","Mahadev","Vasudev","PrasannaAbhi","Pradeep","Sowmya"];
				 }
				 else if(a==="Pramod"){
					var arr=["Prasad","Manisha","Pramila","Abhi","Mahadev","Vasudev","PrasannaAbhi","Pradeep","Sowmya"];
				 }
				 else if(a==="Mahadev"){
					var arr=["Prasad","Manisha","Pramila","Pramod","Abhi","Vasudev","PrasannaAbhi","Pradeep","Sowmya"];
				 }
				 else if(a==="Vasudev"){
					var arr=["Prasad","Manisha","Pramila","Pramod","Mahadev","Abhi","PrasannaAbhi","Pradeep","Sowmya"];
				 }
				 else if(a==="PrasannaAbhi"){
					var arr=["Prasad","Manisha","Pramila","Pramod","Mahadev","Vasudev","Abhi","Pradeep","Sowmya"];
				 }
				 else if(a==="Pradeep"){
					var arr=["Prasad","Manisha","Pramila","Pramod","Mahadev","Vasudev","PrasannaAbhi","Abhi","Sowmya"];
				 }
				 else if(a==="Sowmya"){
				 var arr=["Prasad","Manisha","Pramila","Pramod","Mahadev","Vasudev","PrasannaAbhi","Pradeep","Abhi"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<div class="container">
	<div class="table-responsive">
		<table class="table table-striped">
			<tr>
				<td><h1 id="tc" style="text-align:center">Credits Transfer</h1></td>
			</tr>
		</table>
		<br><br>
		<div class="center"style="background-color:pink">
			<div class="col-12 col-sm-4 offset-sm-4">
				<form class="tab" action="creditupdate.php" method="post">
					<label for="sender"><b>Transfer From<b> : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   </label>
							<select id="input" name="sender" onchange="random_function()">
								<option  selected>Select Name</option>
								<option value="Abhi">Abhi</option>
								<option value="Prasad">Prasad</option>
								<option value="Manisha">Manisha</option>
								<option value="Pramila">Pramila</option>
								<option value="Pramod">Pramod</option>
								<option value="Mahadev">Mahadev</option>
								<option value="Vasudev">Vasudev</option>
								<option value="PrasannaAbhi">PrasannaAbhi</option>
								<option value="Pradeep">Pradeep</option>
								<option value="Sowmya">Sowmya</option>
							</select><br><br>
						
					<label for="receiver"><b>Transfer To<b> :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
						<select id="output" name="receiver" onchange="random_function1()" >
							<option>Select Name</option>
						</select><br><br>
					<label for="sender_name">Credits    :&nbsp</label>
						<input type="number" min=1 name="transfer"><br><br><br>
					<div class="button1 button-primary" style="text-align:center">
						<input class="button button-warning" type="submit" name="submit" value="Transfer" >
					</div>
				</form> 						
			</div>
		</div>
	
</body>
</html>