<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Pengguna</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Pengguna</li>
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
                <div class="float-right rounded">
                    <a href="<?= site_url('user') ?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="table-body">
            <div class="row">
                <div class="col-md-4">
                    <?php ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama *</label>
                            <input type="text" class="form-control  <?= form_error('nama') ? 'is-invalid' : null ?>" id="nama" name="nama" placeholder="Nama" value="<?= set_value('nama') ?>">
                            <span class="text-danger"><?= form_error('nama') ?></span>

                        </div>
                        <div class="form-group ">
                            <label for="username">Username *</label>
                            <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : null ?>" id="username" name="username" placeholder="Username" value="<?= set_value('username') ?>">
                            <span class="text-danger"><?= form_error('username') ?></span>

                        </div>
                        <div class="form-group ">
                            <label for="password">Password *</label>
                            <input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : null ?>" id="password" name="password" placeholder="Password" value="<?= set_value('password') ?>">
                            <span class="text-danger"><?= form_error('password') ?></span>

                        </div>
                        <div class="form-group ">
                            <label for="password2">Ulangi Password *</label>
                            <input type="password" class="form-control <?= form_error('password2') ? 'is-invalid' : null ?>" id="password2" name="password2" placeholder="Ulangi Password" value="<?= set_value('password2') ?>">
                            <span class="text-danger"><?= form_error('password2') ?></span>

                        </div>
                        <div class="form-group ">
                            <label for="address">Alamat</label>
                            <textarea name="address" id="address" class="form-control" placeholder="Masukkan Alamat"><?= set_value('address') ?></textarea>
                        </div>
                        <div class="form-group ">
                            <label for="level">Level</label>
                            <select name="level" id="level" class="form-control <?= form_error('level') ? 'is-invalid' : null ?>">
                                <option value="">- Pilih Level -</option>
                                <option value="1" <?php echo set_select('level', '1') ?>>Admin</option>
                                <option value="2" <?php echo set_select('level', '2') ?>>Kasir</option>
                            </select>
                            <span class="text-danger"><?= form_error('level') ?></span>

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">
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