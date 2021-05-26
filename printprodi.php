<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
    <title>Cetak Program Studi</title>
    <style>
        h1 {
            text-align: center;
        }

        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align:left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 15px;
        }
    </style>
</head>

<body>
        <h1>Program Studi Universitas CIC</h1>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Prodi</th>
                    <th>Nama Prodi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_dataprodi();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->kodeprodi ?></td>
                            <td><?= $data->namaprodi ?></td>
                        </tr>
                    <?php endforeach;
                } else { ?>
                    <tr>
                        <td colspan="15">Belum Ada Rekap Program Studi</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <script>
            window.print();
        </script>
</body>
</html>