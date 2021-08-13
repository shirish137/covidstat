<?php

/*request means url
                                          JSON array
                 --------------------------------------
				 case_time_series          statewise          tested
				                          0
										  1 Maharashtra
										  2
										  3
				 

                ----------------------------------------
*/

$url="https://api.covid19india.org/data.json";

$data=file_get_contents($url);

//echo $data;

$d=json_decode($data,true);

$act=$d['statewise']['1']['active'];

$con=$d['statewise']['1']['confirmed'];
$death=$d['statewise']['1']['deaths'];
$recover=$d['statewise']['1']['recovered'];
$dt=$d['statewise']['1']['lastupdatedtime'];

?>


<html>
    <head>
	      <title>Covid-19 Maharashtra</title>
	</head>
	
	<body>
	       <h1>COVID-19 MAHARASHTRA STATISTIC</h1>
		   
		   <table border=1 align="center">
		        <tr>
				      <th>Parameters</th>
					  <th>Count</th>
				</tr>
		        
				<tr>
				      <td>Active:</td>
					  <td><?php echo $act; ?></td>
				</tr>
				
				<tr>
				      <td>Confirmed:</td>
					  <td><?php echo $con; ?></td>
				</tr>
				
				<tr>
				      <td>Deaths:</td>
					  <td><?php echo $death; ?></td>
				</tr>
				
				<tr>
				      <td>Recovered:</td>
					  <td><?php echo $recover; ?></td>
				</tr>
				
				<tr>
				      <td>Last Updated on:</td>
					  <td><?php echo $dt; ?></td>
				</tr>
				
		
		   
		   </table>
		   
		   <h3>Courtesy: Covid-19 India API Postman</h3>
	
	</body>


</html>