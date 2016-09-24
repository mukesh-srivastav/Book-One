<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>BookOne</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="public/css/bootstrap.min.css"></script>
	<script src="public/js/jquery-1.11.3.min.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="public/css/style.css"/>
</head>
<body>
	<div id="wrapper" class="container-fluid">
		<div id="header" class="row">
			<div id="title">BookOne</div>
			<div id="title_quote"> A book is a dream that you hold in your hands.</div>
		</div>
		<div id="category">
			<div id="category_title">
				<div id="category_title_name">Categories</div>
			</div>
			<div id="category_list">
				<ul id="content_list">
				<?php 	$categorycode= $_GET["id"];
						if($categorycode=="SCH")
						{
							header("Location:content.php?name='$category' ");
						}
					
						$s="localhost";
						$u="root";
						$p=12345;
						$conn=new mysqli($s,$u,$p,"MYDB");
						if($conn->connect_error){
						die("connection failed : " .$conn->connect_error);
						}
						$sql="Select * from interest where category='$categorycode' "; // how it would be to title a site as pagebook.com
						$rslt=$conn->query($sql);
			if($rslt->num_rows>0){
					while($row=$rslt->fetch_assoc()){ 
					$a=$row["id"];
					$b=$row["interest"];
					$c=$row["category"];
					$d=$row["interestcode"];
					?>
					<li> <a href="content.php?id=<?php echo $d ;?>" 
					class="content_list_items" 
					><?php  echo $b; ?></a></li>
					<hr/>	
					<?php
					}} // create table computertheory (id int , book_name , book_path , size ,author , interestcode );
					?>
				</ul>	<!--create table interest,bookone	(id int auto_increment , interest varchar(5) not null , category varchar(300) , primary  key(id));	!-->
<?php 

?>
			</div>
			<div id="booknote">
				<div id="quote">Books are the most faithful friends of us. </div>
			</div>
		</div>
		<div id="footer">
		<p id="footernote">BookOne is optimized for learning , provides a mean for studies .
		Our motive is to provide a place that could be a end to explore your coriousity till beneath. 
		<br/>	Thanks . </p>
		</div>
	</div>
</body>
</html>