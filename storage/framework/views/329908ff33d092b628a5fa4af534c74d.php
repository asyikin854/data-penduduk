<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/table.css')); ?>">
    <title>Sunting Pendapatan Pemohon</title>
</head>
<body>
    <form action="<?php echo e(route('pendapatan.edit', ['id' => $pendapatan->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <table>
            <h5>PENDAPATAN PEMOHON</h5>
            <tbody>
                <tr>
                    <th>Jawatan</th>
                    <th>:</th>
                    <td><input type="text" value="<?php echo e(old('jawatan', $pendapatan->jawatan)); ?>" name="jawatan"required></td>
                </tr><tr>
                    <th>Gaji</th>
                    <th>:</th>
                    <td><input type="number" value="<?php echo e(old('gaji', $pendapatan->gaji)); ?>" name="gaji" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Majikan</th>
                    <th>:</th>
                    <td><input type="text" value="<?php echo e(old('majikan', $pendapatan->majikan)); ?>" name="majikan"></td>
                </tbody>
        </table>
        <br><br>
        <table>
            <h5>PENDAPATAN PASANGAN</h5>
            <tbody>
                <tr>
                    <th>Jawatan</th>
                    <th>:</th>
                    <td><input type="text" value="<?php echo e(old('jawatan_psgn', $pendapatan->jawatan_psgn)); ?>" name="jawatan_psgn"></td>
                </tr><tr>
                    <th>Gaji</th>
                    <th>:</th>
                    <td><input type="number" value="<?php echo e(old('gaji_psgn', $pendapatan->gaji_psgn)); ?>" name="gaji_psgn" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Majikan</th>
                    <th>:</th>
                    <td><input type="text" value="<?php echo e(old('majikan_psgn', $pendapatan->majikan_psgn)); ?>" name="majikan_psgn"></td>
                </tbody>
            </tbody>
        </table>
        <br><br>
        <table>
            <h5>PENDAPATAN DAN LAIN-LAIN SUMBANGAN</h5>
            <tbody>
                <tr>
                    <th>Sumbangan Anak</th>
                    <th>:</th>
                    <td><input type="number" value="<?php echo e(old('sumbangan_anak', $pendapatan->sumbangan_anak)); ?>" name="sumbangan_anak" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Sumbangan Saudara Mara</th>
                    <th>:</th>
                    <td><input type="number" value="<?php echo e(old('sumbangan_saudara', $pendapatan->sumbangan_saudara)); ?>" name="sumbangan_saudara" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Pendapatan Sampingan</th>
                    <th>:</th>
                    <td><input type="number" value="<?php echo e(old('sampingan', $pendapatan->sampingan)); ?>" name="sampingan" step="0.01" min="0" required></td>
                </tr><tr>
                    <th>Sumbangan Agensi</th>
                    <th>:</th>
                    <td><input type="number" value="<?php echo e(old('sumbangan_agensi', $pendapatan->sumbangan_agensi)); ?>" name="sumbangan_agensi" step="0.01" min="0" required></td>
                </tr><tr>
                    <th><a href="<?php echo e(route('kewangan.details', ['id' => $pendapatan->maklumat_pemohon_id])); ?>"><button type="button">Batal</button></a></th>
                    <td><input type="submit" value="Update"></td>
                </tr> 
            </tbody> 
        </table>
    </form>
</body>
</html><?php /**PATH C:\Users\Lenovo\Desktop\internship\data_penduduk_KT\resources\views//pendapatanEdit.blade.php ENDPATH**/ ?>