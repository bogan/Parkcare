<!DOCTYPE HTML>
<html>

	<head>
		<title><?php echo "$title" ?> </title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta content="text/html; charset=iso-8859-1" http-equiv=Content-Type>
        <meta name=title content="Cooleman Ridge Park Care Group">
        <meta name=DC:title content="Cooleman Ridge Park Care Group">
        <meta name=keywords content="environment, nature park, nature parks, cooleman ridge, parkcare, park care, weeds, walks, bicycle riding, bike riding, horse riding, fire, fires, January 2003,">
        <meta name=DC:subject content="environment, nature park, nature parks, cooleman ridge, parkcare, park care, weeds, walks, bicycle riding, bike riding, horse riding, fire, fires, January 2003,">
        <meta name=description content="Cooleman Ridge is situated between Chapman and Kambah lying north-west to south-east, about 3.5 km long with an area of 187 ha.  Its highest point is Mt Arawang (765 m) with a general level of 600 m above the Canberra Plain.  It offers extensive views east and north over Canberra and west over the Brindabella mountain range.">
        <meta name=Author content="Rohan Thomas">
        <meta name=Keywords content="environment, nature park, nature parks, cooleman ridge, parkcare, park care, weeds, walks, bicycle riding, bike riding, horse riding, fire, fires, January 2003">
        <meta name=generator content="MSHTML 9.00.8112.16443">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Icons -->
        <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>

        <!-- Stylesheets -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="styles/bootstrap-submenu.min.css" type="text/css">
        <link rel="stylesheet" href="styles/style.css" type="text/css">

        <!-- Scripts -->
        <!--script src="http://maps.googleapis.com/maps/api/js" type="text/javascript"/>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="scripts/jquery.tablesorter.min.js" type="text/javascript"></script>
        <script src="scripts/bootstrap-submenu.min.js"  type="text/javascript"></script>

        <script type="text/javascript">

			$(document).ready(function() {         
                $("#myTable").tablesorter({
                    sortList: [[1,0]]
                });

                $('[data-submenu]').submenupicker();
			 }); 
		</script>



       <!--<style type="text/css">
			td
			{
				padding:5px
			}
		
			table.news
			{
				padding:5px;
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
		</style>-->
	</head>

	<body>

    <div class="jumbotron text-left" >

        <div>
            <img src="images/logo1.jpg" style="width:100px; float:left; padding:5px; border:none">

            <span style="font-size:250%;margin:50px;vertical-align:middle">Cooleman Ridge Parkcare Group</span>



        </div>

    </div>

    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><span style="color:#ba7025;font-family:arial;">Home</span></a>
            </div>

            <div>
                <ul class="nav navbar-nav">

                    <!-- Our Group -->
                    <li class="dropdown">
                        <a class="menuitem" tabindex="0" aria-expanded="false" data-toggle="dropdown" data-submenu="">Our Group<span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li class="menuitem" ><a href="about.php">About</a></li>
                            <li><a href="organisation.php">Organisation</a></li>
                            <li><a href="partners.php">Partners</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="documents.php">Documents</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </li>

                    <!-- Our Ridge -->
                    <li class="dropdown">
                        <a tabindex="0" aria-expanded="false" data-toggle="dropdown" data-submenu="">
                            Our Ridge<span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li><a href="location.php">Location</a></li>
                            <li><a href="history.php">History</a></li>
                            <li class="dropdown-submenu">
                                <a tabindex="0">Features</a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="0" href="earth.php">Earth</a></li>
                                    <li><a tabindex="0" href="fire.php">Fire</a></li>
                                    <li><a tabindex="0" href="water.php">Water</a></li>
                                    <li><a tabindex="0" href="flora.php">Flora</a></li>
                                    <li><a tabindex="0" href="fauna.php">Fauna</a></li>
                                    <li><a tabindex="0" href="hills.php">Hills</a></li>
                                    <li><a tabindex="0" href="plantations.php">Plantations</a></li>
                                    <li><a tabindex="0" href="trails.php">Trails</a></li>
                                    <li><a tabindex="0" href="weeds.php">Weeds</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- Our Work -->
                    <li class="dropdown">
                        <a tabindex="0" aria-expanded="false" data-toggle="dropdown" data-submenu="">
                            Our Work<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="strategy.php">Strategy</a></li>
                            <li><a href="activities.php">Actvities</a></li>
                            <li><a href="meetings.php">Meetings</a></li>
                            <li class="dropdown-submenu">
                                <a tabindex="0">Areas</a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="0" href="groupareas.php">Group</a></li>
                                    <li><a tabindex="0" href="individualareas.php">Individual</a></li>
                                    <li><a tabindex="0" href="specialpurposeareas.php">Special Purpose</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a tabindex="0" href="surveys.php">Surveys</a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="0" href="plants.php">Plants</a></li>
                                    <li><a tabindex="0" href="animals.php">Animals</a></li>
                                    <li><a tabindex="0" href="trees.php">Trees</a></li>
                                    <li><a tabindex="0" href="blackberrys.php">Blackberrys</a></li>
                                    <li><a tabindex="0" href="woodyweeds.php">Woody Weeds</a></li>
                                    <li><a tabindex="0" href="fires.php">Fires</a></li>
                                    <li><a tabindex="0" href="dams.php">Dams</a></li>
                                </ul>
                            </li>
                            <li><a href="contribute.php">Contribute</a></li>


                        </ul>
                    </li>
                </ul>



                <script>
                    (function() {
                        var cx = '008804451297429151083:h_lh6xzgjre';
                        var gcse = document.createElement('script');
                        gcse.type = 'text/javascript';
                        gcse.async = true;
                        gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(gcse, s);
                    })();
                </script>
                <gcse:search></gcse:search>

            </div>
        </div>
    </nav>

    <div class="container" >
        <div class="row">
            <div class="col-sm-2">&nbsp;</div>
            <div class="col-sm-8">
            <!-- content starts here -->