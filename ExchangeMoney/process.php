<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<title>Exchang Money</title>
</head>

<body>
<div class="wrapper" align="center">
   
   <div class="box-head">
          <p>Exchang Money</p>
   </div>

   <div class="box-exchange">
  <?php
  $money=$_POST['money'];   
  $coin=$_POST['coin'];
 
 
  switch ($coin) {
   case 1:
    $coin_m=0.03;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." สหดอลลาร์สหรัฐอเมริกา (USD)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." สหดอลลาร์สหรัฐอเมริกา (USD)";
    break;
   case 2:
    $coin_m=32.55;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m." เกาหลีวอน (KRW)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)." เกาหลีวอน (KRW)";
    break;    
   case 3:
    $coin_m=3.24;
    $sum=$money*$coin_m;
    echo "1 บาทไทย (THB) = ".$coin_m."  เงินเยนของญี่ปุ่น (JPY)"."<br><br>";
    echo "จำนวน ".number_format($money,2)." บาท  =  ".number_format($sum,2)."  เงินเยนของญี่ปุ่น (JPY)";
    break;    
  }
 
  ?>
  </div>

   <div class="box4"> 
       <a href="index.html"><div class="button">BACK</div></a>
    </div>
  

</div>
</body>
</html>