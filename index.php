<html>
<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
  	<div class="container">
  		<div class="row">
    		<div class="col-sm">
      			<h2>DUMB GRAM</h2>
    		</div>
    		<div class="col-sm">
      			<ul class="nav justify-content-end">
  					<li class="nav-item">
    				<button type="button" class="btn btn-primary btn-sm" onclick="document.location='image_add.php'">Add image blog</button>
    				<script></script>
  					</li>
  				<ul></ul>
  					<li class="nav-item">
    				<button type="button" class="btn btn-primary btn-sm" onclick="document.location='user_add.php'">Add user</button>
    				</li>
  				</ul>
    		</div>
  		</div>
	</div>
	

<div>
	
     <?php 
     	include('connect.php');
     	$query = mysqli_query($koneksi,"SELECT * FROM Image_blog");
            $no = 1;
            while($row = mysqli_fetch_array($query))
            {
                ?>
                
                    <br><img src="image.php?id=<?php echo $row['id']; ?>"width="200" height="200"/>
                    <?php echo $row['user_id'];?><br>
                <?php 
            }
            ?>
   
</div>
</body>
</html>