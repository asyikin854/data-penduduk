<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/navi.css')); ?>">
    <title>Semua Pemohon</title>
    <style>
        .table-wrapper {
  overflow-x: auto;
}

.responsive-table {
  width: 100%;
  border-collapse: collapse;
}

.responsive-table th, .responsive-table td {
  padding: 10px;
  border: 1px solid #ddd;
}

.responsive-table th {
  background-color: #f2f2f2;
}

/* Responsive styles */
@media only screen and (max-width: 600px) {
  .responsive-table th, .responsive-table td {
    font-size: 12px;
  }
}
.clean-button {
  background-color: #ff0000;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}
    </style>
</head>
<body>
    <div class="container">
        <a href="<?php echo e(route('index')); ?>"><button type="button" class="cbutton">Laman Utama</button></a> <br><br>
    <form action="<?php echo e(route('pemohon.display')); ?>" method="GET">
    <center><input type="text" name="nama" id="nama" class="simple" placeholder="Nama Pemohon">
    <input type="submit" value="Cari" class="cbutton"></center>
    </form>
    <br><br>
    <?php if(session('success')): ?>
    <center><div class="alert alert-success">
        <?php echo e(session('success')); ?></center>
        </div>
        <?php endif; ?>
    <?php if(session('error')): ?>
        <center><div class="alert alert-success">
            <?php echo e(session('error')); ?></center>
            </div>
            <?php endif; ?>
    <?php if(isset($pemohon) && count($pemohon) > 0): ?>
    <div class="table-wrapper">
    <table class="responsive-table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>No. Kad Pengenalan</th>
                <th>Jantina</th>
                <th>Tarikh Lahir</th>
                <th>Status Perkahwinan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $count = 1;
            ?>
            <?php $__currentLoopData = $pemohon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pemohons): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($count++); ?> </td>
                <td><a href="<?php echo e(route('pemohon.details', ['id' => $pemohons->id])); ?>"><?php echo e($pemohons->nama); ?></a></td>
                <td><?php echo e($pemohons->ic); ?> </td>
                <td><?php echo e($pemohons->jantina); ?> </td> 
                <td><?php echo e($pemohons->tarikh_lahir); ?> </td>
                <td><?php echo e($pemohons->status); ?> </td>
                <td><form action="<?php echo e(route('pemohon.delete', ['id' => $pemohons->id])); ?>" method="POST" id="deleteForm_<?php echo e($pemohons->id); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="button" onclick="confirmDelete(<?php echo e($pemohons->id); ?>)" class="clean-button">Delete</button>
                </form></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
    <?php else: ?>
    <p>Tiada Pemohon</p>
    <?php endif; ?>
</div>
    <script>
        function confirmDelete(id) {
            if (confirm("Adakah anda pasti untuk hapuskan data?")) {
                // If user confirms, submit the form
                document.getElementById('deleteForm_' + id).submit();
            }
        }
    </script>
</body>
</html>
<?php /**PATH C:\Users\Lenovo\Desktop\internship\data_penduduk_KT\resources\views//allPemohon.blade.php ENDPATH**/ ?>