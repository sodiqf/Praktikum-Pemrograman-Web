<html>
<head>
    <title>Biodata</title>
</head>
<body>
<h1 align="center"> BIODATA</h1>
</body>
<form action="Tugas_.php" method="POST" NAME="input" enctype="multipart/form-data">
<table align="center">
<tr>
<td></td>
<td>Nama</td> 
<td><input type="text" name="nama" size="20" ></td>
</tr>

<tr>
<td></td>
<td>Nim</td>
<td><input type="text" name="nim" size="20"></td>
</tr>

<tr>
<td></td>
<td>Alamat</td>
<td><textarea cols="20" rows="5" name=”alamat”></textarea></td>
</tr>

<tr>
<td></td>
<td>Jenis Kelamin</td>
<td><input type=radio name=jenis-kelamin value="Laki-laki" >Laki=laki </td>
<td><input type=radio name=jenis-kelamin value="Perempuan" >Perempuan </td>
</tr>
<tr>
<td></td>
<td>Status</td>
<td><input type=radio name=status value="Bekerja" >Bekerja  </td>
<td><input type=radio name=status  value="Belum-Bekerja" >Belum Bekerja  </td>
</tr>

<tr>
<td></td>
<td>Hobi saya :
        <br>
        <input type="checkbox" name="hobi_1" value="Swimming">Berenang
        <br>
        <input type="checkbox" name="hobi_2" value="Singing">Menyanyi
        <br>
        <input type="checkbox" name="hobi_3" value="Shopping">Belanja
        <br>
        <input type="checkbox" name="hobi_4" value="Sport">Olahraga
        <br>
        <input type="checkbox" name="hobi_5" value="Other">Lainnya
        <br>
</td>
</tr>

<tr>
<td></td>
<td>Tanggal Lahir</td>
<td><input type=date name=tanggal><br><br>
</tr>

</table>
</form>
</body>
</html>


