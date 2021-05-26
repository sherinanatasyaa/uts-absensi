<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
    <title>Cetak Rekap Mata Kuliah</title>
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
        <h1>Daftar Mata Kuliah</h1>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Mata Kuliah</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Kode Prodi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_datamatkul();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->kodemk ?></td>
                            <td><?= $data->namamk ?></td>
                            <td><?= $data->sks ?></td>
                            <td><?= $data->smt ?></td>
                            <td><?= $data->kodeprodi ?></td>
                        </tr>
                    <?php endforeach;
                } else { ?>
                    <tr>
                        <td colspan="6">Belum Ada Daftar Mata Kuliah</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <script>
            window.print();
        </script>
</body>
</html>