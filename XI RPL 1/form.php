<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <FORM ACTION="formproses.php" METHOD="POST" NAME="input">
        <table>
        <tr>
        <td valign ="top" >Nama </td>     
        <td><input type="text" name="nama"></td>
        </tr><br>

        <tr>
         <td valign="top"> Alamat  </td> 
         <td>Jalan</td>       
         <td><input type="text" name="jln"></td>
         <td>Kecamatan</td>       
         <td><input type="text" name="ke"></td>
         <td>Desa</td>       
         <td><input type="text" name="de"></td>
         <td>Kode</td>       
         <td><input type="text" name="ko"></td>
         </tr><br>
        
        <tr>
        <td valign ="top"> Nama Barang    </td>          
        <td> <input type="text" name="barang"></td>
        </tr><br>
        
        <tr>
        <td valign = "top ">Harga Barang</td>          
         <td> <input type="number" name="harga"></td>
         </tr></br>
         <tr>
        
        <tr>
        <td valign = "top ">Jumlah Barang</td>          
         <td> <input type="number" name="jumlah"></td>
         </tr></br>
         <tr>
        
        <tr>
         <td valign="top"> Deskripsi  </td>        
         <td><textarea name="deskripsi" id="" cols="20" rows="5"></textarea></td>
         </tr><br>

         <tr>
         <td valign="top"> Tanggal pembelian  </td>        
         <td> <input type="date" name="tgl"></td>
         </tr><br>

        
        <td><input type="submit" name="pilih" value="simpan" >
    



        </table>
</FORM>

</body>
</html>