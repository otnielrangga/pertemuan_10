<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 2</title>
</head>
<body>
    
<form name="Latihan02" id="Latihan02" method="POST" onsubmit="return checkform()">
     NIM<br>
          <input type="text" name="txNIM" id="txNIM"><br>
    
        <br>Jenis Kelamin<br>
        <input type="radio" name="txJK" id="txJK" value="L">Laki-Laki
        <input type="radio" name="txJK" id="txJK" value="P">Perempuan

        <br>Jurusan<br>
        <select name="txJurusan" id="txJurusan">
            <option value="MTI"> MTI </option>
            <option value="KAB"> KAB </option>
            <option value="DGM"> DGM </option>
            </select>


        <br>Hoby<br>
        <input type="checkbox" name="txhobibola" value="1">Sepak Bola
        <input type="checkbox" name="txhobibulutangkis" value="2">Bulu Tangkis
        <input type="checkbox" name="txhobivoly" value="3">Bola Voly
        
    <br><br>
    <button type="submit"> Kirim Data</button>

    

    </form>



</body>
</html>