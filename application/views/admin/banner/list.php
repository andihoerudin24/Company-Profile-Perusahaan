<div class="row">
    <div class="span7">
        <div class="widget">
            <div class="widget-header"> <i class="icon-picture"></i>
                <h3>Tambah Banner</h3>
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
            <?php echo form_open('Admin/Banner/cari') ?>
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

    <?php
    $no = 1;
    foreach ($banner as $row):
        ?>
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
                } elseif ($this->session->flashdata('gagal')) {
                    echo "<div class='alert alert-danger'>";
                    echo $this->session->flashdata('gagal');
                    echo "</div>";
                }
                ?>
                <div class="widget-header"> <i class="icon-picture"></i>
                    <h3><?php echo $row->nama_banner ?></h3>
                </div>
                <div class="widget-content">
                    <div class="row">

                        <div class="col-xs-6 col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="<?php echo base_url() ?>Uploads/banner/<?php echo $row->foto ?>" alt="...">
                            </a>
                        </div>
                        <hr>
                        <center>
                        <button type='button' class='btn btn-3d btn-danger btn-sm' data-toggle='modal' onclick=show_by_id(<?php echo $row->id; ?>) data-target='#Modal'>Edit</button> 
                        <?php echo anchor('Admin/Banner/Hapus/' . $row->id, 'Hapus', array('class' => 'btn btn-success')) ?>
                        </center>
                    </div>

                </div>

            </div>
        </div>
        <?php $no++; ?>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Banner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('Admin/Banner/add') ?>
                <div class="col-sm-12">
                    <span class="icon-picture">
                        <input type="file" autofocus="TRUE" name="userfile" class="form-control">
                        <hr><label class="icon-archive">Nama Banner</label>
                        <input type="text" autofocus="TRUE" name="nama_banner" required="" class="form-control">
                        
                    </span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
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
                <h5 class="modal-title" id="exampleModalLabel">Rubah Banner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="widget-content">
                    <?php echo form_open_multipart('Admin/Banner/edit') ?>
                    <div>
                        <input type="hidden" id="id" name="id">
                        <input type="file" name="userfile" class="form-control"><hr>
                        
                        <input type="text" name="nama_banner" id="nama_banner" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" name="submit" class="btn btn-primary">Edit</button>
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
            url: '<?php echo base_url() ?>Admin/Banner/show_by_id',
            data: 'id=' + id,
            success: function (data) {
                var json = data,
                        obj = JSON.parse(json);
                $("#id").val(obj.id);
                $("#nama_banner").val(obj.nama_banner);
               
            }
        })
    }

</script>