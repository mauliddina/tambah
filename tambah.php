<html>
    <head>
</head>
<body>
    <h1> form Bantuan BLT </h1>
    <form action ="prosestambah.php" method="POST">
    <form>
        <fieldset>
            <p>
                <label for="nama"> Nama Lengkap: </label>
                <input type="text" name="nama"/>
</p>
<p>
                 <label for="jb"> Jenis Bantuan: </label>
                 <label> <input type="radio" name="jb" Value="Tunai"/> Tunai  </lbel>
                 <label> <input type="radio" name="jb" Value=" Nontunai"/> Non Tunai  </label>
                 <label> <input type="radio" name="jb" Value="Beras"/> Beras </label>
                 <label> <input type="radio" name="jb" Value="Minyak"/> Minyak </label>
                 <label> <input type="radio" name="jb" Value="Gula"/> Gula </label>
</p>
<p>
    <input type="submit" name="tambah" value="tambah">
</form>
</fieldset>
</body>
</html>                
