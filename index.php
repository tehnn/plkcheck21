
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ประมวลผลข้อมูล 21 แฟ้ม แยกรายสถานบริการ</title> 

        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
        <style>
            .title-text{
                font-size:large;
                font-weight:bold;
            }
        </style>

        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>

    </head>
    <body>


        <div data-role="page" id="page1">
            <div data-theme="b" data-role="header" data-position="fixed">
                <a  data-icon="home" data-iconpos="notext"></a>
                <h3>
                    ผลการจัดส่งข้อมูล 21 แฟ้มแยกรายสถานบริการ สสจ.พิษณุโลก 
                </h3>
                <a href="#mypanel" data-icon="bars" data-iconpos="notext"></a>
            </div>
            <?php
                $month=date("Y-m");       
            ?>
            <div data-role="content">
                <a href="check21.php?mon=<?=$month?>" rel='external' data-role="button">1) ผลการส่งข้อมูล สถานบริการ -> สสจ.</a>
                <a href="check21e.php?mon=<?=$month?>"   rel='external' data-role="button">2) ผลการส่งข้อมูล สสจ. -> สปสช.</a>
                <a href="check_surveil.php"   rel='external' data-role="button">3) ผลการส่งข้อมูล SURVEIL -> สปสช.</a>
            </div>

            <div data-theme="d" data-role="footer" data-position="fixed">
                <h3>
                    สำนักงานสาธารณสุขจังหวัดพิษณุโลก
                </h3>
            </div>            

        </div>
    </body>
</html>

