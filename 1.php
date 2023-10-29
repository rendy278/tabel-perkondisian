<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="2.php" method="post">
            <center>
                <table border="2" style="width: 27%;">
                    <th colspan="2" length="5">Form Pembelian Sederhana</th>
                    <tr>
                        <td><Label for="nama">Nama Pembeli</Label></td>
                        <td><input type="text" name="nama" id="nama" required></td>
                    </tr>
                    <tr>
                        <td><label for="kodeB">Kode Buku   </label></td>
                        <td><select name="kodeB" id="kodeB">
                            <option value="B0001">B0001</option>
                            <option value="B0002">B0002</option>
                            <option value="B0003">B0003</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label for="jumlahBeli">Jumlah Beli</label></td>
                        <td><input type="number" name="jumlahBeli" id="jumlahBeli" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" rowspan="2" style="height: 50px;">
                            <center>
                                <input type="submit" value="SAVE">  
                                <input type="reset" value="RESET">
                            </center>
                        </td>
                    </tr>
                </table>
            </form>
            <br>
            <br>
            <br>
            <table border="3" style="width: 35%;">
                <tr>
                    <td><strong>Kode Buku</strong></td>
                    <td><strong>Judul</strong></td>
                    <td><strong>Pengarang</strong></td>
                    <td><strong>Harga</strong></td>
                </tr>
                <tr>
                    <td><center>B0001</center></td>
                    <td>MS Access 2020</td>
                    <td>Kurnia</td>
                    <td>47000</td>
                </tr>
                <tr>
                    <td><center>B0002</center></td> 
                    <td>Php & MySql Untuk Orang Awan</td>
                    <td>Peter Tambunan</td>
                    <td>64000</td>
                </tr>
                <tr>
                    <td><center>B0003</center></td> 
                    <td>Web Untuk Bisnis</td>
                    <td>Abdul Kadir</td>
                    <td>73000</td>
                </tr>
            </table>
        </center>
</body>
</html>