<?php
require("condb.php");
?>
<!DOCTYPE html>
<html>
    <head>        
        <meta charset="utf-8">
        <title>21Files (PROV to NHSO) CHECK</title>
        <style>
            .header{
                color: #fff5f8;
                font-size: 30px;
                font-weight: bold;
                background-color: #df8505;
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
                window.location = 'check21e.php?mon=' + m;
            }
            function indx(){
                window.location = 'index.php';
            }
        </script>


    </head>
    <body>        
        <?php
        $mon = $_GET[mon];
        $sql = "select * from tehn_count21e where MON='$mon' order by pcucode ASC";
        ?>
        <div class="header">21Files (PROV to NHSO) CHECK</div>
        <div style="border-bottom: #2a85a0 1px solid;">


            <div style="margin-top: 10px; margin-left: 5px;">
			  <span><button class="btn btn-success" type="button" onclick="indx()">ย้อนกลับ</button></span>

                <span>เลือกเดือน</span>
                <select name="mon" id="mon" data-theme="d" onchange="go(this.value);">                                                    
                    <option value='2013-08' <?php if ($mon == '2013-08') {
            echo "selected";
        } ?>>สิงหาคม 2556</option>
                    <option value='2013-09' <?php if ($mon == '2013-09') {
            echo "selected";
        } ?>>กันยายน 2556</option>
                    <option value='2013-10' <?php if ($mon == '2013-10') {
            echo "selected";
        } ?>>ตุลาคม 2556</option>
                    <option value='2013-11' <?php if ($mon == '2013-11') {
            echo "selected";
        } ?>>พฤศจิกายน 2556</option>
                    <option value='2013-12' <?php if ($mon == '2013-12') {
            echo "selected";
        } ?>>ธันวาคม 2556</option>
                    <option value='2014-01' <?php if ($mon == '2014-01') {
            echo "selected";
        } ?>>มกราคม 2557</option>
                    <option value='2014-02' <?php if ($mon == '2014-02') {
            echo "selected";
        } ?>>กุมภาพันธ์ 2557</option>
                </select>
                
                
            </div>
        </div>
        <div class="table-contain">
            
			   <?php
			$sql_h = "SHOW FIELDS FROM tehn_count21e";
			$sql_r = $sql;
			
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