<!DOCTYPE HTML>
<html>

	<head>
		<title><?php echo "$title" ?> </title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta content="Microsoft Visual Studio 10.0" name="generator">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="/styles/style.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<!--script src="http://maps.googleapis.com/maps/api/js"></script-->
		<script type="text/javascript" src="jquery/jquery.tablesorter.min.js"></script> 
		<script type="text/javascript">

			$(document).ready(function() {         
					$("#myTable").tablesorter({         
					sortList: [[1,0]] 
					});
			 }); 
		</script>
		<style type="text/css">
			td
			{
				padding:5px
			}
		
			table.news
			{
				padding:5; 
				width:100%;
				border:thin;
				border-style:solid;
				border-color:black 
			}
			td.news
			{
				text-align:center;
				border:thin;
				border-style:solid 
			}
			th.news
			{
				text-align:center;
				border:thin;
				border-style:solid 
			}		
		</style>
	</head>

	<body>
	
		<!--<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">Cooleman Ridge Parkcare Group</a>
		    </div>
		    <div>
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="about.php">About</a></li>
		        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="ridge.php">Ridge <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="geology.php">Earth</a></li>
		            <li><a href="fire.php">Fire</a></li>
		            <li><a href="dam.php">Water</a></li>
		          </ul>
		        </li>
		        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="ridge.php">Life <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="flora.php">Flora</a></li>
		            <li><a href="fauna.php">Fauna</a></li>
		          </ul>
		        </li>
		        <li><a href="news.php">News</a></li>
		        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="ridge.php">People<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="members.php">Members</a></li>
		            <li><a href="work.php">Work</a></li>
		          </ul>
		        </li>
		        
		        <li><a href="contact.php">Contact</a></li>

		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		      </ul>
	    	</div>
		  </div>
		</nav>
-->			

		

		<div class="container">
		
			
		
			<br/>
			
			<div id="header" class="row">
				<div class="span12">
					<table align="center" style="font-family: Arial, Helvetica, sans-serif">
						<!--<tr><td colspan="9"></td>
							<td colspan="3"><div width="150">
							<script>
							  (function() {
							    var cx = '008804451297429151083:h_lh6xzgjre';
							    var gcse = document.createElement('script');
							    gcse.type = 'text/javascript';
							    gcse.async = true;
							    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
							        '//cse.google.com/cse.js?cx=' + cx;
							    var s = document.getElementsByTagName('script')[0];
							    s.parentNode.insertBefore(gcse, s);
							  })();
							</script>
							<gcse:search></gcse:search></div></td></tr>
-->						
						<tr>
							<td width="20">&nbsp;</td>
							<td align="center" width="76"><a href="/index.php">
							<img alt="" border="2" height="60" src="/images/treesil.jpg" width="60"></a></td>
							<td align="center" width="76"><a href="/aboutfgrd.php">
							<img alt="" border="2" height="60" src="/images/fernemb.jpg" width="60"></a></td>
							<td align="center" width="76"><a href="/place.php">
							<img alt="" border="2" height="60" src="/images/treesn.jpg" width="60"></a></td>
							<td align="center" width="76"><a href="/flora.php">
							<img alt="" border="2" height="60" src="/images/hibert.jpg" width="60"></a></td>
							<td align="center" width="76"><a href="/fauna.php">
							<img alt="" border="2" height="60" src="/images/kestrels.jpg" width="60"></a></td>
							<td align="center" width="76"><a href="/geology.php">
							<img alt="" border="2" height="60" src="/images/rocks.jpg" width="60"></a></td>
							<td align="center" width="76"><a href="/fire.php">
							<img alt="" border="2" height="60" src="/images/silhiv.jpg" width="60"></a></td>
							<td align="center" width="76"><a href="/dam.php">
							<img alt="" border="2" height="60" src="/images/damwalk.jpg" width="60"></a></td>
							<td align="center" width="76"><a href="/members.php">
							<img alt="" border="2" height="60" src="/images/douglas.jpg" width="60"></a></td>
							<td align="center" width="76"><a href="/walks.php">
							<img alt="" border="2" height="60" src="/images/damwalk.jpg" width="60"></a></td>
							<td align="center" width="76"><a href="/news.php">
							<img alt="" border="2" height="60" src="/images/bench.jpg" width="60"></a></td>
							
							<td width="20">&nbsp;</td>
						</tr>
						<tr>
							<td width="20">&nbsp;</td>
							<td align="center" height="30"><a href="/index.php">Home</a></td>
							<td align="center" height="30"><a href="/about.php">About</a></td>
							<td align="center" height="30"><a href="/place.php">Place</a></td>
							<td align="center" height="30"><a href="/flora.php">Flora</a></td>
							<td align="center" height="30"><a href="/fauna.php">Fauna</a></td>
							<td align="center" height="30"><a href="/geology.php">Earth</a></td>
							<td align="center" height="30"><a href="/fire.php">Fire</a></td>
							<td align="center" height="30"><a href="/dam.php">Water</a></td>
							<td align="center" height="30"><a href="/members.php">People</a></td>
							<td align="center" height="30"><a href="/walks.php">Walks</a></td>
							<td align="center" height="30"><a href="/news.php">News</a></td>
							
							<td width="20">&nbsp;</td>
						</tr>
					</table>
				</div>
			</div>
		
			<br/>
