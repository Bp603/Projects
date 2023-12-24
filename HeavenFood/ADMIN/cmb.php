<?php
	include 'Config.php';
	
	if(isset($_REQUEST['cmbCountry']))
	{
		$cid=$_REQUEST['cmbCountry'];
	}
	else
	{
		$cid=0;
	}

?>
<br>

<html>

	<head>
	
		<title>
			COMBO-BOX
		</title>
		
		<script language="javascript">
			
			function state()
			{
				document.f1.submit();
			}
			
		</script>
		
	</head>
	
	<body>
	
		<form name="f1" action="cmb.php" method="post">
		
			<?php
				
				$qry="select * from ORDR WHERE STATUS = 1";
				
				echo $qry;
				
				$r=mysqli_query($lk,$qry);
				
			?>
				
			COUNTRY : <select name="cmbCountry" onchange="state();">
						
						<option>Select Country</option>
						
						<?php
							
							while($ans=mysqli_fetch_array($r))
							{
								
								$country_id=$ans['OID'];

								
								$country_name=$ans['OID'];
								
								if($country_id==$cid)
								{
									echo "<option value=\"$country_id\" selected>$country_name</option>";
								}
								else
								{
									echo "<option value=\"$country_id\">$country_name</option>";
								}
							}
						?>
					  </select>
					  <br>
					  
			
			<br>
			
			
			
			
			<?php 
				
				$qry="select * from ORDRDLT where OID=$cid";
				
				$r=mysqli_query($lk,$qry);
				
			?>
			 <select name="cmbCity">
					
					<option>Select City</option>
					
					<?php
						
						while($ans=mysqli_fetch_array($r))
						{
							$city_id=$ans['TOTAL'];
							
							$city_name=$ans['TOTAL'];
							$total = $total + $ans['TOTAL'];							
								
							// echo "<option value=\"$city_id\" selected>$city_name</option>";	
						}
						echo "<input name=\"amt\" id=\"amt\" value=\"$total\"/>";
					?>
				  </select>
		</form>
		
	</body>
	
</html>