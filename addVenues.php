
<head>

<style type="text/css">

body{
	background-image: url('images/backGround.jpg');
	background-repeat: no-repeat;
	background-position: center;
}

#container {
 /*stitching*/
 color: white;
 outline: 1px dashed #98abb9;
 outline-offset: -5px;
 padding-top:10px;  
 background-color: Coral;
 height: 50px;
 width: 300px;
 
 /*shadow*/
 -webkit-box-shadow: 2px 2px 2px #000;
 -moz-box-shadow: 2px 2px 2px #000;
 box-shadow: 2px 2px 2px #000;
}


table{

	font-family: sans-serif; 
    color: #3da8c6;
    background-image: url('images/tableBack.jpg');
    
}


</style>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>



<body >


		<center>
		<div id='container'><center>Add Venue:</center></div>
		<br>
			<form action='addVenuesBack.php' method='post' enctype="multipart/form-data">
			<table class='table-bordered' cellpadding='10px'>
		    
		    <tr> 
		    	<td> Place Name: </td> 
		    	<td> <input type="text" name="PlaceName" required ></td>
		    </tr> 

		    <tr> 
		    	<td> City: </td> 
		    	<td><select name="PlaceCity" required>
                <option value='Bloomington'>Bloomington</option>
                <option value='Indianapolis'>Indianapolis</option>
            </select></td>
		    	
		    </tr>
		   
		    <tr> 
		    	<td> Place Details: </td> 
		    	<td> <input type="text" name="PlaceDetail" required></td>
		    </tr>
		    <tr> 
		    	<td> Place Medida Files: </td> 
		    	<td> <input type="file" name="images"  required ></td>
		    </tr>
		    <tr>
		    	<td colspan="2">
			<center><input type="Submit" name='VenueAdded' value='Add Venue' ></center>
				</td>
			</tr>
		</form>
		</center>

