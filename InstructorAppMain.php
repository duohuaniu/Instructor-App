<!DOCTYPE html>

<html>
	<head>
		<title>AP Instructor Portal</title>
		
		<meta name="viewport" content="width=device-width, intial-scale=1.0">
		
		<link href="bootstrap.min.css" rel="stylesheet" media="screen"/>
		<link href="bootstrap-responsive.css" rel="stylesheet" media="screen"/>
		<link href="bootstrap-responsive.min.css" rel="stylesheet" media="screen"/>
		<link href="bootstrap.css" rel="stylesheet" media="screen"/>
		<link href="InstructorAppCSS.css" rel="stylesheet" media="screen"/>
		<link href="glyphicons-halflings.png" rel="stylesheet" media="screen"/>
		<link href="glyphicons-halflings-white.png" rel="stylesheet" media="screen"/>
		<link href="demo_page.css" rel="stylesheet" media="screen" />
		<link href="demo_table.css" rel="stylesheet" media="screen" />

		
		<script src="jquery.js"></script>
		<script src="bootstrap.min.js"></script>
		<script src="bootstrap.js"></script>
		<script type='text/javascript' src="jquery.dataTables.js"></script>
		<script type="text/javascript" src="./mian.js"></script>
	</head>
	
	<body>
		<div class="container">
			<div class="container">
				<div class="row-fluid">
					<div class="span12">
						<h4 id="temp">Instructor Application</h4>
						<p id="temp">Search for AP instructors</p>
						<br>
						<table class="table" id="hello" class="display">
							<thead>
								<tr>
									<th>Saba User ID</th>
									<th>Name of Training Site</th>
									<th>Address</th>
									<th>City</th>
									<th>Zip</th>
									<th>State</th>
									<th>Hourly Rate</th>
									<th>LTP Organization ID</th>
								</tr>
							</thead>
							<tbody>
							    <?php
                                    $dbh = mysql_connect("localhost","root","123456");
		                            if(!$dbh){die("error");}
		                            mysql_select_db("data", $dbh);
		                            $m='wang';
		                            $sql = "SELECT * FROM instructor";
	                            ?>
	                            <?php
								    $result=mysql_query($sql);
									while($row=mysql_fetch_array($result))
                                    {									
									echo "<tr>";
									echo "<td>$row[2]</td>";
									echo "<td>$row[3]</td>";
									echo "<td>$row[4]</td>";
									echo "<td>$row[5]</td>";
									echo "<td>$row[6]</td>";
									echo "<td>$row[7]</td>";
									echo "<td>$row[8]</td>";
									echo "<td>$row[9]</td>";
								    echo "</tr>";
								    }
									mysql_close();
								?>
							</tbody>
						</table>
					</div>
					<div class="container">
						<div class="row-fluid" id="footer">
							<div class="span4">
								<a id="fontsize" href="https://issues.arcphss.org/CreateIssueDetails!init.jspa?pid=10201&issuetype=1">Submit Bug Report</a>
							</div>
							<div class="span4">
								Feedback
							</div>
							<div class="span4">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
			    $('#hello').dataTable();
			});
        </script>
	</body>
</html>