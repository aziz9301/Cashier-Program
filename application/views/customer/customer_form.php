<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data customer</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">customer</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="card">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?= ucfirst($page) ?> customer</h3>
                <div class="float-right rounded">
                    <a href="<?= site_url('customer') ?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?php ?>
                    <form action="<?= site_url('customer/process') ?>" method="post">
                        <div class="form-group">
                            <label for="nama">Nama Customer*</label>
                            <input type="hidden" name="id" value="<?= $row->customer_id ?>">
                            <input type="text" id="nama" class="form-control" name="nama" placeholder="Masukkan Nama Customer" value="<?= $row->name ?>" required>
                        </div>
                        <div class="form-group ">
                            <label for="description">Gender *</label>
                            <select class="form-control" name="gender" id="gender" required>
                                <option value="">Pilih</option>
                                <option value="L" <?= $row->gender == 'L' ? 'selected' : '' ?>>Laki-Laki</option>
                                <option value="P" <?= $row->gender == 'P' ? 'selected' : '' ?>>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <label for="phone">No. Telepon*</label>
                            <input type="text" id="phone" class="form-control" name="phone" placeholder="Masukkan No Telepon" value="<?= $row->phone ?>">
                        </div>
                        <div class="form-group ">
                            <label for="address">Alamat</label>
                            <textarea name="address" id="address" class="form-control" placeholder="Masukkan Alamat"><?= $row->address ?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="<?= $page ?>" class="btn btn-success">
                                <i class="fa fa-paper-plane"></i> Simpan
                            </button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

</section>
<!-- /.content -->