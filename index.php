<?php 
    require_once 'dbkoneksi.php';

    $sql = "SELECT * FROM mahasiswa";
    $rs = $dbh->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pengolahan</title>
    <style>
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #0056b3;
        }
        .container {
            text-align: center;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color:  #00FF7F;
        }
        
        div {
            margin: center;
        }
    </style>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Semester</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $nomor = 1;
            foreach ($rs as $row) {
            ?>
                <tr>
                    <td><?php echo $nomor ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['nim'] ?></td>
                    <td><?php echo $row['jurusan'] ?></td>
                    <td><?php echo $row['semester'] ?></td>
                    <td>
                        <a class="button" href="edit.php?idedit=<?php echo $row['id'] ?>">Edit</a>
                        <a class="button" href="delete.php?iddel=<?php echo $row['id'] ?>"
                            onclick="return confirm('Anda Yakin Ingin Menghapus Data Mahasiswa <?php echo $row['nama'] ?>?')"
                        >Delete</a>
                    </td>
                </tr>
            <?php 
                $nomor++;   
            } 
            ?>
        </tbody>
    </table>
    <div class="container">
        <a class="button" href="form_nilai.php">Create New Data</a>
    </div>
</body>
</html>
