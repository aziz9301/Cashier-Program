<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Supplier</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Supplier</li>
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
                    <a href="<?= site_url('supplier/add') ?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-user-plus"></i> Create
                    </a>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="table-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Nama</th>
                        <th>No. Telpon</th>
                        <th>Address</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->phone ?></td>
                            <td><?= $data->address ?></td>
                            <td><?= $data->description ?></td>
                            <td class="text-center" width="160px">
                                <a href="<?= site_url('supplier/edit/' . $data->supplier_id) ?>" class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i> Update
                                </a>
                                <a href="<?= site_url('supplier/del/' . $data->supplier_id) ?>" onclick="return confirm ('Apakah Anda Yakin ?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

</section>
<!-- /.content -->