<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerbit</title>
</head>
<body>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800"><?= $judul;?></h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="post" action="<?= base_url()?>penerbit/update">
                <div class="form-group">
                    <label for="exampleInputName1">Id Penerbit</label>
                    <input type="text" name="id_penerbit" value="<?= $penerbit['id_penerbit'];?>"class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Nama Penerbit</label>
                    <input type="text" name="nama_penerbit"  value="<?= $penerbit['nama_penerbit'];?>" class="form-control" placeholder="Input Nama Konsumen" required>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Update </button>
                    <a href="<?= base_url()?>penerbit" class="btn btn-danger"> Batal</a>
                </div>
                
            </form>
            </div>
        </div>
    </div>
</body>
</html>