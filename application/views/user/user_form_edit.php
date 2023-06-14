<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Pengguna</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Pengguna</li>
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
                <div class="pull-right">
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

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama *</label>
                            <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
                            <input type="text" class="form-control  <?= form_error('nama') ? 'is-invalid' : null ?>" id="nama" name="nama" placeholder="Nama" value="<?= $this->input->post('nama') ?? $row->name ?>">
                            <span class="text-danger"><?= form_error('nama') ?></span>

                        </div>
                        <div class="form-group ">
                            <label for="username">Username *</label>
                            <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : null ?>" id="username" name="username" placeholder="Username" value="<?= $this->input->post('username') ?? $row->username ?>">
                            <span class="text-danger"><?= form_error('username') ?></span>

                        </div>
                        <div class="form-group ">
                            <label for="password">Password *</label><small>( Jika tidak diganti biarkan kosong )</small>
                            <input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : null ?>" id="password" name="password" placeholder="Password" value="<?= $this->input->post('password') ?>">
                            <span class="text-danger"><?= form_error('password') ?></span>

                        </div>
                        <div class="form-group ">
                            <label for="password2">Ulangi Password *</label>
                            <input type="password" class="form-control <?= form_error('password2') ? 'is-invalid' : null ?>" id="password2" name="password2" placeholder="Ulangi Password" value="<?= $this->input->post('password2') ?>">
                            <span class="text-danger"><?= form_error('password2') ?></span>

                        </div>
                        <div class="form-group ">
                            <label for="address">Alamat</label>
                            <textarea name="address" id="address" placeholder="Masukkan Alamat" class="form-control"><?= $this->input->post('address') ?? $row->address ?></textarea>
                            <?= form_error('address') ?>
                        </div>
                        <div class="form-group ">
                            <label for="level">Level</label>
                            <select name="level" id="level" class="form-control <?= form_error('level') ? 'is-invalid' : null ?>">
                                <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
                                <option value="">- Pilih Level -</option>
                                <option value="1" <?= $level == 1 ? 'selected' : null ?>>Admin</option>
                                <option value="2" <?= $level == 2 ? 'selected' : null ?>>Kasir</option>
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