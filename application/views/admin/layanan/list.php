<div class="row">
    <div class="span8">
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
            <div class="widget-header"> <i class="icon-archive"></i>
                <h3>Layanan</h3>
            </div>
            <div class="widget-content">
                <table id="example" class="table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Layanan</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($service as $row):
                            ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->nama_service ?></td>
                                <td><button type='button' class='btn btn-3d btn-danger btn-sm' data-toggle='modal' onclick=show_by_id(<?php echo $row->id_service; ?>) data-target='#Modal'>Edit</button></td>
                                <td><?php echo anchor('Admin/Layanan/Hapus/' . $row->id_service, 'Hapus', array('class' => 'btn btn-3d btn-info btn-sm')) ?></td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="span4">
        <div class="widget">
            <div class="widget-header"> <i class="icon-file"></i>
                <h3>Tambah Service</h3>
            </div>
            <div class="widget-content">
                <?php echo form_open('Admin/Layanan') ?>
                <div>
                    <label class="icon-android">Nama Layanan</label>
                    <input type="text" name="nama_service" required="" class="form-control">
                </div>
                <button type="submit" name="submit" class="btn btn-info btn-sm">Tambah</button>
                <?php echo form_close(); ?>
            </div>
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

                <div class="widget-content">
                    <?php echo form_open('Admin/Layanan/edit') ?>
                    <div>
                        <input type="hidden" id="id_service" name="id_service">
                        <label class="icon-android">Nama Kategori</label>
                        <input type="text" id="nama_service" name="nama_service" required="" class="form-control">
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
    function show_by_id(id_service) {
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>Admin/Layanan/show_by_id',
            data: 'id_service=' + id_service,
            success: function (data) {
                var json = data,
                        obj = JSON.parse(json);
                $("#id_service").val(obj.id_service);
                $("#nama_service").val(obj.nama_service);
            }
        })
    }

</script>