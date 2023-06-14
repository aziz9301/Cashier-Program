<?php if ($this->session->has_userdata('success')) { ?>

    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fas fa-check"><?= $this->session->flashdata('success'); ?></i>

    </div>
<?php } ?>