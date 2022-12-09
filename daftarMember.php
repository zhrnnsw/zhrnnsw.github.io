<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title>Daftar Member</title>
    </head>
    <body>
        <table>
            <tr> 
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telpon</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
            </tr>
            <?php
                include "koneksi.php";

                $query="SELECT * FROM member";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result)>0){
                        while ($row = mysqli_fetch_array($result)){
                            
            ?>
            
            <tr> 
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["nama"] ?></td>
                <td><?php echo $row["alamat"] ?></td>
                <td><?php echo $row["noTelp"] ?></td>
                <td><?php echo $row["jk"] ?></td>
                <td><?php echo $row["agama"] ?></td>
                <td>
                    <a href="editForm.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php
                        }
        
                } else {
                    echo "0 results";
                }
            
            ?>
        </table>
    </body>
</html> 