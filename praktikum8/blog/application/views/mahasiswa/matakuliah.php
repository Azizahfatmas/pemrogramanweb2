<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
</head>
<body>
    <h3>Mata Kuliah</h3>
    <table border="1">
        <thead>
            <tr align='center'>
                <th width = '40'>No</th>
                <th width = '200'>Nama Matkul</th>
                <th width = '200'>SKS</th>
                <th width = '200'>Kode</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor =1;
            foreach ($matakuliah as $mat) {
            ?>
            <tr align='center'>
                <td><?php echo $nomor ?></td>
                <td><?php echo $mat -> nama ?></td>
                <td><?php echo $mat -> sks ?></td>
                <td><?php echo $mat -> kode ?></td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>