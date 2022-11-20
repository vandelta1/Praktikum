<html>
<head><title>Tanggalan</title></head>
<style>

.container{
     display: flex;
     background-image: url('https://www.kaorinusantara.or.id/wp-content/uploads/2021/01/elaina-majo-no-tabitabi.jpg');
     background-size: cover;
     width: 100%;
     height: 100vh;
     justify-content: center;
     align-items: center;
     background-position: center;

}

.row{
     background-color: rgba(255, 255, 255, 0.7);
     border-radius: 10px;
     padding-top: 25px;
     padding-right: 45px;
     padding-left: 25px;
     padding-bottom: 25px;
}


*{
     margin: 0;
     font-family: calibri;
     padding: 0;
}

</style>
<body>
     <div class="container">
          <div class="row"> 
<?php
     echo date('l, d-m-Y');
     echo "<br/>";
     echo date('D . m / y');
     echo "<br/>";
     echo date('D - M . Y');
     echo "<br/>";
     echo "Tanggal: ".date('d-m-Y');
     echo "<br/>";
     echo "Jam : " . date("h:i:s a");
     echo "<br/>";
     echo "Tgl : ".date('d');
     echo "<br/>";
     echo "Bulan : ".date('M');
     echo "<br/>";
     echo "Tahun : ".date('Y');
     echo "<br/>";
?>
</div>
</div>
</body>
</html>