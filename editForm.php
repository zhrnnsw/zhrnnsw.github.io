<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <?php
            include "koneksi.php";
            $id=$_GET['id'];
            $query="SELECT * FROM member WHERE id='$id'";
            $result = mysqli_query($connect, $query);
        ?>
        <form class="form" action="prosesEdit.php" method="GET">
            <table>
            <?php 
                while($row=mysqli_fetch_array($result)){
            ?>  
                <tr>
                    <td>Id: </td>
                    <td><input type="text" name="id" value="<?php echo $row['id']; ?>"></td>
                </tr>
                <tr>
                <td>Nama: </td>
                    <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
                </tr>
                <tr>
                <td>Alamat: </td>
                    <td><textarea name="alamat" rows="5" cols="20"> <?php echo $row['alamat']; ?> </textarea></td>
                </tr>
                <tr>
                    <td>No Telp: </td>
                    <td><input type="number" name="noTelp" value="<?php echo $row['noTelp']; ?>"></td>
                </tr><br>
                <tr>
                    <td>Jenis Kelamin: </td>
                    <td>
                        <input type="radio" name="jk" value="L">
                        <label>Laki-Laki</label>
                    </td>
                    <td>
                        <input type="radio" name="jk" value="P">
                        <label>Perempuan</label>
                    </td>
                </tr><br>
                <tr>
                    <td>Agama:</td>
                    <td><select name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
            <?php
            }
            ?>
            
            </table>
        </form>
    </body>
</html>