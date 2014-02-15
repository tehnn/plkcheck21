<?php
$host = "192.168.200.5";
$user = "tehnn";
$pass = "112233";
$db = "datakpi";
$con = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($db) or die(mysql_error($con));
?>
<!DOCTYPE html>
<html>
    <head>        
        <meta charset="utf-8">
        <title>SURVEIL CHECK</title>
        <style>
            .header{
                color: #fff5f8;
                font-size: 30px;
                font-weight: bold;
                background-color: coral;
                border-bottom: wheat 1px solid;
                padding: 15px

            }
            .table-contain{
                margin-top: 10px;
                margin-left: 5px;
                margin-right: 5px;
            }

        </style>

        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="dtboot/DT_bootstrap.css">

        <script type="text/javascript" charset="utf-8" language="javascript" src="dtboot/jquery.js"></script>
        <script type="text/javascript" charset="utf-8" language="javascript" src="dtboot/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf-8" language="javascript" src="dtboot/DT_bootstrap.js"></script>

        <script>
            function go(m) {
                //alert(m);
                window.location = 'check21.php?mon=' + m;
            }
            function indx() {
                window.location = 'index.php';
            }
        </script>


    </head>
    <body>        
        <div class="header">SURVEIL CHECK</div>
        <div style="border-bottom: #2a85a0 1px solid;">
            <div style="margin-top: 10px; margin-left: 5px;">

                <button class="btn btn-success" type="button" onclick="indx()">ย้อนกลับ</button>

            </div>
			<br>

        </div>
        <div class="table-contain">
		<?php
			$sql_h = "SHOW FIELDS FROM vw_surviel";
			$sql_r = "select * FROM vw_surviel limit 1000";
			
		?>
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                <thead>
                    <tr>
					<?php
					$result = mysql_query($sql_h); 
					while ($row = mysql_fetch_array($result)) { 
						
				?>
			
				 <th><font size=1><?=$row[0]?></font></th>
				<?php
						
					} 
					
					?>
                </tr>
                </thead>
                <tbody>

				<?php
					$result = mysql_query($sql_r); 
					$f=mysql_num_fields($result);
					while ($row = mysql_fetch_array($result)) { 
					
				?>
				<tr>
					<?php  
						for($i=0;$i<$f;$i++){
							echo "<td><font size=1>$row[$i]</font></td>";
						}

					?>
				</tr>	
				
				<?php
					}

				?>
                 
                </tbody>
            </table>
        </div>
    </body>
</html>