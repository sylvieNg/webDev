<?php
include 'database.php';
include 'session.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>To-do-list Home</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<style>
#toTop {
    display: none;
    text-decoration: none;
    position: fixed;
    bottom: 45px;
    right: 3%;
    overflow: hidden;
    width: 40px;
    height: 40px;
    border: none;
    text-indent: 100%;
    background: url(arrow_up.png) no-repeat 50% 44% #05A4C2;
    border-radius: 30em;
}
#toTopHover {
    width: 40px;
    height: 40px;
    display: block;
    overflow: hidden;
    float: right;
    opacity: 0;
    
}
.edit{
	height:37px;
	width:66px;
	margin:6px 0 4px 10px;
	background:url('edit.png') no-repeat left rgba(45, 133, 191, 0.99);
	font-family: 'Open Sans', sans-serif;
	text-align:right;
	color:white;
	border-bottom: 5px solid #156785;
	text-shadow: 0px -2px #2980B9;
	border-radius: 10px;
	position: relative;
    left: 87px;
    bottom: 47px;

}
.delete{
	height:37px;
	width:74px;
	margin:6px 0 4px 10px;
	background:url('delete.png') no-repeat left rgba(45, 133, 191, 0.99) ;
	font-family: 'Open Sans', sans-serif;
	text-align:right;
	color:white;
	border-bottom: 5px solid #156785;
	text-shadow: 0px -2px #2980B9;
	border-radius: 10px;

}

.edit:active{
	transform: translate(0px,5px);
	border-bottom: 1px solid;
}

.delete:active{
	transform: translate(0px,5px);
	border-bottom: 1px solid;
}
.btn{
	height:49px;
	width:100%;
	display:block;
	line-height:27px;
	font-size:17px;
	font-family: Palatino, "Palatino Linotype", "Palatino LT STD", "Book Antiqua", Georgia, serif;;
	text-align:center;
	color:#FFF;
	outline:0;
	cursor:pointer;
	background-image:url(button-blue.png);
	border:solid 1px #185ca8;
	border-radius:3px;
	box-shadow:0px 1px 2px rgba(0,0,0,0.3);
	background-position:0px 0px;
	background-repeat:repeat-x;
	
}
.btn:hover{
	box-shadow:0px 1px 2px rgba(0,0,0,0.5);
	background-position:0px -46px;
}

.inputRequirement{
	color:#FF0000;
	line-height:20px;
	padding-left:5px;
	vertical-align:top;
	font-style:italic;
}
.account a{
	float:right;
	background:#b22222;
	margin-left:251px;
	border-radius:10%;

}

.account a:hover{
	background:#fa8072 !important;
	
}

.account li:hover a {
	background: #fa8072 !important;
}

.container{
	background:white;
	height:2000px;
	margin:100px 293px;
	border-radius:30px;
	box-shadow: -7px -4px 39px #ffdead;
	font-family: 'Open Sans', sans-serif;


}

#content{
	padding-left:30px;

}
body{
	margin:0px;
	background:url("wood.jpg");
}

.outer{
	width:227px;
	margin-right:60px;
}

h1{
	margin:0px;
	color: #d6d6d6;
    text-shadow: 0 1px 0 white;
	font-family: Baskerville, “Baskerville Old Face”, “Hoefler Text”, Garamond, “Times New Roman”, serif;
	font-size:3.0em;
}

#wrapper{
	width:100%;
}

#menu-bar{
	width:100%;
	margin:30px 40px;
}
.account ul{
	padding-top:60px;
}
ul{
	position:absolute;
	list-style-type:none;
	margin:0;
	padding:0;
    height: 60px;
    padding-top: 10px;
	
}

li{
	float:left;
	display:inline-block;
	margin-right:8px;
}

li a {
	display:block;
	min-width:165px;
	height: 50px;
	text-align: center;
	line-height: 50px;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	color: #fff;
	background: #0099dd;
	text-decoration: none;
	border-radius:10%;
}

li:hover a {
	background: #00cc66;
}

li:hover ul a {
	background: #f3f3f3;
	color: #2f3036;
	height: 40px;
	line-height: 40px;
}

li:hover ul a:hover {
	background: #19c589;
	color: #fff;
}

li ul {
	display: none;
}

li ul li {
	display: block;
	float: none;
}

li ul li a {
	width: auto;
	min-width: 145px;
	padding: 0 20px;
}

ul li a:hover + .sub, .sub:hover {
	display: block;
}

.modal-content {
    position: fixed;
    font-family: Arial, Helvetica, sans-serif;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.8);
    z-index: 999;
    opacity:0;
    transition: opacity 400ms ease-in;
    pointer-events: none;
}
.modal-content:target {
    opacity:1;
    pointer-events: auto;
}
.modal-content > div {
    width: 420px;
    position: relative;
    margin: 10% auto;
    padding: 5px 20px 13px 20px;
    border-radius: 10px;
    background: #f2f2f2;

}
.close {
    background-image: url(fancybox_sprite.png);
   	position: absolute;
    top: -18px;
    right: -14px;
    width: 36px;
    height: 36px;
    cursor: pointer;
    z-index: 999;
}

.close:hover{
	opacity:.8;
}

input{
	line-height:1.2;
	padding:10px;
}

h3{
	font-family: Palatino, "Palatino Linotype", "Palatino LT STD", "Book Antiqua", Georgia, serif;
	font-style: oblique;
	font-size:2em;
	color:#7f0505;
	font-weight: 500;
	line-height: 26.4px;
	font-variant: small-caps;
}

td{
	font-family: Palatino, "Palatino Linotype", "Palatino LT STD", "Book Antiqua", Georgia, serif;
	font-weight:bold;

}
</style>
</head>
<body>
	<ul id="menu-bar">
		<li class = "outer">
			<h1>To-do-List</h1>
		</li>
		<li>
			<a href="#">My Tasks+</a>
			<ul class="sub">
				<li><a href="main.php? view=daily">Daily</a></li>
				<li><a href="main.php? view=weekly">Weekly</a></li>
				<li><a href="main.php? view=monthly">Monthly</a></li>
			</ul>
		</li>

		<li>
			<a href="#modal">Add Task</a>
		</li>

		<li>
			<a href="#">Sort+</a>
			<ul class="sub">
				<li><a href="main.php? sort=list_date">Sort by Date</a></li>
				<!--<li><a href="main.php? sort=list_title">Sort by Alphabet</a></li>-->
			</ul>
		</li>

		<li class = "account">
			<a href="#"><?php echo $login_session; ?></a>
			<ul class ="sub">
				<li><a href="logout.php">Log Out</a></li>
			</ul>

		</li>

	<div class = "container">
	<div id="content">
	<?php
	if(isset($_GET['sort']))
	{
		$sql=mysqli_query($account, "select *from list where user_email='$_SESSION[email]' order by $_GET[sort] DESC");
		while($row=mysqli_fetch_array($sql))
			{
				echo "</br>";
				echo $row['list_title'];
				echo "</br>";
				echo $row['list_description'];
				echo "</br>";
				echo $row['list_date'];
				echo "</br>";
				echo "<form action='' method='post'>";
				echo "<input type='hidden' name='id' value='$row[list_id]' />";
				echo "<input class=delete type =submit name=delete formaction='delete.php'value=Delete>";
				echo "</form>";
				echo "<a href='main.php?edit=$row[list_id] & #modal2'><input class=edit type =submit name=edit value= Edit align=right></a>";
				
			}
	}else if(isset($_GET['view']))
	{
		if ($_GET['view']=="daily")
		{
			$sql=mysqli_query($account, "SELECT * FROM list WHERE list_date > DATE_SUB(NOW(), INTERVAL 1 DAY) and user_email='$_SESSION[email]' ORDER BY list_title DESC");
			while($row=mysqli_fetch_array($sql))
				{
					echo "</br>";
					echo $row['list_title'];
					echo "</br>";
					echo $row['list_description'];
					echo "</br>";
					echo $row['list_date'];
					echo "</br>";
					echo "<form action='' method='post'>";
					echo "<input type='hidden' name='id' value='$row[list_id]' />";
					echo "<input class=delete type =submit name=delete formaction='delete.php' value=Delete>";
					echo "</form>";
					echo "<a href='main.php?edit=$row[list_id] & #modal2'><input class=edit type =submit name=edit value= Edit align=right></a>";
				
				}

		}else if ($_GET['view']=="weekly")
		{
			$sql=mysqli_query($account, "SELECT * FROM list WHERE list_date > DATE_SUB(NOW(), INTERVAL 1 WEEK) and user_email='$_SESSION[email]' ORDER BY list_title DESC");
			while($row=mysqli_fetch_array($sql))
				{
					echo "</br>";
					echo $row['list_title'];
					echo "</br>";
					echo $row['list_description'];
					echo "</br>";
					echo $row['list_date'];
					echo "</br>";
					echo "<form action='' method='post'>";
					echo "<input type='hidden' name='id' value='$row[list_id]' />";
					echo "<input class=delete type =submit name=delete formaction='delete.php' value=Delete>";
					echo "</form>";
					echo "<a href='main.php?edit=$row[list_id] & #modal2'><input class=edit type =submit name=edit value= Edit align=right></a>";
				
				}

		}else if ($_GET['view']=="monthly")
		{
			$sql=mysqli_query($account, "SELECT * FROM list WHERE list_date > DATE_SUB(NOW(), INTERVAL 1 MONTH) and user_email='$_SESSION[email]' ORDER BY list_title DESC");
			while($row=mysqli_fetch_array($sql))
				{
					echo "</br>";
					echo $row['list_title'];
					echo "</br>";
					echo $row['list_description'];
					echo "</br>";
					echo $row['list_date'];
					echo "</br>";
					echo "<form action='' method='post'>";
					echo "<input type='hidden' name='id' value='$row[list_id]' />";
					echo "<input class=delete type =submit name=delete formaction='delete.php' value=Delete>";
					echo "</form>";
					echo "<a href='main.php?edit=$row[list_id] & #modal2'><input class=edit type =submit name=edit value= Edit align=right></a>";
					
				}

		}
	}else
	{
		$sql=mysqli_query($account, "select *from list where user_email='$_SESSION[email]' order by list_title ASC");
		while($row=mysqli_fetch_array($sql))
			{
				echo "</br>";
				echo $row['list_title'];
				echo "</br>";
				echo $row['list_description'];
				echo "</br>";
				echo $row['list_date'];
				echo "</br>";
				echo "<form method='post'>";
				echo "<input type='hidden' name='id' value='$row[list_id]' />";
				echo "<input class=delete type =submit name=delete  formaction='delete.php' value=Delete align=left>";	
				echo "</form>";
				echo "<a href='main.php?edit=$row[list_id] & #modal2'><input class=edit type =submit name=edit value= Edit align=right></a>";
			

				
			}
	}
	?>
	</div>
	</div>
	<script>
	var timeOut;
		function scrollToTop() {
			if (document.body.scrollTop!=0 || document.documentElement.scrollTop!=0){
				window.scrollBy(0,-50);
				timeOut=setTimeout('scrollToTop()',10);
			}
			else clearTimeout(timeOut);
		}
	</script>
	<a href="#" id="toTop" style="display: block;" onclick="scrollToTop();return false;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</ul>
	

<div id="modal" class = "modal-content" style="line-height: 18px;">
	
    
    <div>
    <form action="create.php" name="form-create" method="POST" style="width: 420px;">
    	<h3>Create Task</h3><br>
    	<input type="hidden" value="<?php echo $_SESSION['email']; ?>" />
    	<a href="#close" title="Close" class="close"></a>
        <table >
            <tbody>
                <tr>
                    <td align="left">Task Title:<span class="inputRequirement">*</span></td>
                    <td align="left" style="padding-bottom: 5px"><input name="title" type="text" class="task" autofocus="on" required></td>
                </tr>
                <tr>
                    <td align="left">Description:<span class="inputRequirement">*</span></td>
                    <td align="left" style="padding-bottom: 5px"><input name="description" type="text" class="descript" autofocus="on" required style="width: 258px"></td>
                </tr>
                <tr>
                    <td align="left">Date:<span class="inputRequirement">*</span></td>
                    <td align="left" style="padding-bottom: 5px">
                    <input name="date" type="date" class="name" autofocus="on" required  style="width: 258px">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input class="btn" type="submit" name="create" value="Create" style="display: inline; width: 100px; margin-top: 10px;"/>&nbsp;               
                    </td>
                </tr>
            </tbody>
        </table>
    </form> 

    </div>
    
</div>

<div id="modal2" class = "modal-content" style="line-height: 18px;">
	
    
    <div>
    <form action="edit.php" name="form-edit" method="POST" style="width: 420px;">
    	<h3 style="color:#009688">Edit Task</h3><br>
    	<?php
    		$sql=mysqli_query($account, "select *from list where list_id=$_GET[edit]");
    		$row=mysqli_fetch_array($sql);
    	?>
    	<input type="hidden" value="<?php echo $_SESSION['email']; ?>" />
    	<a href="#close" title="Close" class="close"></a>
        <table >
            <tbody>
                <tr>
                    <td align="left">Task Title:<span class="inputRequirement">*</span></td>
                    <td align="left" style="padding-bottom: 5px"><input name="title" value="<?php echo $row['list_title']; ?>" type="text" class="task" autofocus="on" required></td>
                </tr>
                <tr>
                    <td align="left">Description:<span class="inputRequirement">*</span></td>
                    <td align="left" style="padding-bottom: 5px"><input name="description" value="<?php echo $row['list_description']; ?>" type="text" class="descript" autofocus="on" required style="width: 258px"></td>
                </tr>
                <tr>
                    <td align="left">Date:<span class="inputRequirement">*</span></td>
                    <td align="left" style="padding-bottom: 5px">
                    <input name="date" value="<?php echo $row['list_date']; ?>" type="date" class="name" autofocus="on" required  style="width: 258px">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input class="btn" type="submit" name="edit" value="Edit" style="display: inline; width: 100px; margin-top: 10px;"/>&nbsp;               
                    </td>
                </tr>
            </tbody>
        </table>
    </form> 

    </div>
    
</div>

</body>
</html>