<div class="row">
    <div class="span7">
        <div class="widget">
            <div class="widget-header"> <i class="icon-ticket"></i>
                <h3>Tambah Team</h3>
            </div>
            <div class="widget-content">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Tambah
                </button>

            </div>
        </div>
    </div>

    <div class="span5">
        <div class="widget">
            <div class="widget-header"> <i class="icon-search"></i>
                <h3>Pencarian</h3>
            </div>
            <?php echo form_open('Admin/Team/cari') ?>
            <div class="widget-content">
                <span class="icon-search">
                    <input type="text" name="cari" class="form-control">
                </span>
                <button type="submit" name="submit" class="btn btn-info">Cari</button>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>


<div class="row">
    <?php foreach ($team as $row): ?>
        <div class="span3">
            <div class="widget">
                <?php
                if ($this->session->flashdata('berhasil')) {
                    echo "<div class='alert alert-info'>";
                    echo $this->session->flashdata('berhasil');
                    echo "</div>";
                } elseif ($this->session->flashdata('edit')) {
                    echo "<div class='alert alert-warning'>";
                    echo $this->session->flashdata('edit');
                    echo "</div>";
                } elseif ($this->session->flashdata('hapus')) {
                    echo "<div class='alert alert-danger'>";
                    echo $this->session->flashdata('hapus');
                    echo "</div>";
                }
                ?>
                <div class="widget-header"> <i class="icon-picture"></i>
                    <h3><?Php echo $row->nama ?></h3>
                </div>
                <div class="widget-content">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="<?php echo base_url() ?>uploads/team/<?php echo $row->foto ?>" height="100" width="100" alt="...">
                                <div class="caption">
                                    <h3>Bagian :</h3>
                                    <p><?php echo $row->bagian ?></p>
                                    <p><button type='button' class='btn btn-3d btn-danger btn-sm' data-toggle='modal' onclick=show_by_id(<?php echo $row->id; ?>) data-target='#Modal'>Edit</button> 
                                        <?php echo anchor('Admin/Team/Hapus/' . $row->id, 'Hapus', array('class' => 'btn btn-info')) ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    <?php endforeach; ?>
</div>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <?php echo $pagination; ?>

    </ul>
</nav>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Team</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('Admin/Team/add') ?>
                <div class="col-sm-6">
                    <span class="icon-picture">Foto
                        <input type="file" name="userfile" class="form-control">
                    </span>
                </div>
                <div class="col-sm-6">
                    <label class="icon-apple">Nama 
                        <input type="text" required="" name="nama" class="form-control">
                    </label>
                </div>

                <div class="col-sm-6">
                    <label class="icon-user">Bagian 
                        <input type="text" required="" name="bagian" class="form-control">
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>



<!-- Modal for edit -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rubah Nama Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php echo form_open_multipart('Admin/Team/edit') ?>
                
                    <div class="col-sm-6">
                        <input id="id" name="id" type="hidden">
                        <span class="icon-picture">Foto
                            <input type="file" name="userfile" class="form-control">
                        </span>
                    </div>
                    <div class="col-sm-6">
                        <label class="icon-apple">Nama 
                            <input type="text" id="nama" required="" name="nama" class="form-control">
                        </label>
                    </div>

                    <div class="col-sm-6">
                        <label class="icon-user">Bagian 
                            <input type="text" id="bagian" required="" name="bagian" class="form-control">
                        </label>
                    </div>
              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" name="submit" class="btn btn-info">Edit</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- Modal for edit -->

<script type="text/javascript">
    function show_by_id(id) {
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>Admin/Team/show_by_id',
            data: 'id=' + id,
            success: function (data) {
                var json = data,
                        obj = JSON.parse(json);
                $("#id").val(obj.id);
                $("#nama").val(obj.nama);
                $("#bagian").val(obj.bagian);
            }
        })
    }

</script>