<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
        *{
            color: #262626;
            font-family: calibri;
        }
        td {
            color: #262626;
            background-color: #fff;
            border-width: 1px;
            border-style: solid;
            border-color: rgb(244, 244, 244, 0.3);
            font-size: 9pt;
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            font-size: 12pt
        }
        td.kiri {
            color: #fff;
            background-color: #167acc;
            border-width: 1px;
            border-style: solid;
            border-color: #f2efef;
            font-size: 10pt;
            font-weight: bold;
            padding-top: 2px;
            padding-right: 2px;
            padding-bottom: 2px;
            padding-left: 2px;
            text-align: right;
        }

        td.kanan{
            background-color: #f0f0f0;
        }
input[type=Submit]{
    width: 100px;
    height: 50px;
    border-radius: 5px;
    background-color: #0a6b91;
    border-style: solid;
    border-width: 0;
    color: #fff;
    transition: 0.3s all;
}
input[type=Submit]:hover{
    background-color: #2b9fcc;
    cursor: pointer;
    color: #fff;
}
      </style>
</head>
<body>
<center>
    <h1>Hallo Wibu :)</h1> 
    <table width='60%'>
        <tr>
            <td class='kiri' width='30%'>Nama :</td><td  class="kanan" width='30%'>
                <?php echo $_GET['nama']?>
            </td>
        </tr>

        <tr>
            <td class='kiri'>Ini untukmu:</td>
            <td class="kanan"><img src='https://i.pinimg.com/736x/b5/c1/b8/b5c1b85f43cc153a50cfe03bbc2ecbf2.jpg' width='200px'></img></td></tr>
        <tr>
        <tr>
            <td class='kiri'>Sekarang Jam:</td>
            <td class="kanan"><?php echo date("D, M-Y H:i:s");?>
        </tr>
            <td class='kiri'>&nbsp;</td>
            <td class="kanan">
                <center>
                    <form action="logout.php"><input type='submit' value='logout'></form></center></td></tr>
                </table></center>
</body>
</html>