<?php
	$hargaakhir = 0;
		if (isset($_POST['submit'])) {
        $hargaawal = $_POST['hargaawal'];
        $diskon = $_POST['diskon'];
        $jumlah = $_POST['jumlah'];
        $konstanta =$_POST['konstanta'];
        
        function hargaakhir($ha, $d, $j, $kons)
        {
            $hargaakhir = ($ha - ($ha * $d / $kons)) * $j ;
            return $hargaakhir;
        }
        
        $hargaakhir = hargaakhir($hargaawal, $diskon, $jumlah, $konstanta);
        
    }
?>

    
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Penghitung Harga Barang</title>
		
	<h1>Penghitung Harga Barang</h1>
	<form action="" method="post">
		<label for="hargaawal">Harga Barang : </label><br>
        <input type="text" name="hargaawal" id="hargaawal" value="<?php if (isset($_POST["submit"])){echo $hargaawal;} ?>"><br>

        <label for="diskon">Diskon (tanpa %): </label><br>
        <input type="text" name="diskon" id="diskon" value="<?php if (isset($_POST["submit"])){echo $diskon;} ?>"><br>

        <label for="jumlah">Jumlah Barang: </label><br>
 		<input type="text" name="jumlah" id="jumlah" value="<?php if (isset($_POST["submit"])){echo $jumlah;} ?>"><br>

        <input type="hidden" name="konstanta" value="100">

        <input type="submit" name="submit" value="Hasil"><br>

        <label for="hargaakhir">Harga Akhir : </label>
        <input type="text" name="hargaakhir" value="<?php echo $hargaakhir;?>" id="hargaakhir">
	</form>
	</body>
	</html>