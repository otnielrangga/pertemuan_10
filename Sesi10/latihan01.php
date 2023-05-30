<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 1</title>
</head>
<body>
    
    <form name="Latihan01" method="POST" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" name="txNIM">
    </div>
    <div>
        Jenis Kelamin
        <input type="radio" name="txJK" value="L">Laki-Laki
        <input type="radio" name="txJK" value="P">Perempuan
</div>
<div>
    Jurusan
    <select name="txJURUSAN">
        <option value="MTI">MTI</option>
        <option value="KAB">KAB</option>
        <option value="DSN">DSN</option>
</select>
</div>

    <div>
        Hobi
        <input type="checkbox" name="txhobibola" value="1">Sepak Bola
        <input type="checkbox" name="txhobibulutangkis" value="2">Bulu Tangkis
        <input type="checkbox" name="txhobivoly" value="3">Voly
        <input type="checkbox" name="txhobirenang" value="4">renang


    </div>
    <div>

        <button type="submit"> Kirim Data </button>
</div>

</form>

    <script>
    function checkform(frm){
        let form = frm.elements;
        let NIM = form.namedItem("txNIM").value;
        let jnskel = form.namedItem("txJK").value;
        let jur = form.namedItem("txJURUSAN").value;
        let hobi = [
            form.namedItem("txhobibola").checked,
            form.namedItem("txhobibulutangkis").checked,
            form.namedItem("txhobivoly").checked,
            form.namedItem("txhobirenang").checked
        ];

        console.log("NIM: "+NIM);
        console.log("Jenis Kelamin: "+jnskel);
        console.log("Jurusan: "+jur);
        console.log("Hobi: "+hobi);

        return false;
    }

    </script>

</body>
</html>