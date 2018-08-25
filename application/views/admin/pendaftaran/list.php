<div class="row">
    <div class="span7">
        <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>Tambah Pendaftar</h3>
            </div>
            <div class="widget-content">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Tambah
                </button>
                <?php echo anchor('Admin/Pendaftaran/laporan','Print laporan',array('class'=>'btn btn-danger')) ?>
           </div>
            
        </div>
    </div>
</div>
<?php
if ($this->session->flashdata('berhasil')) {
    echo "<div class='alert alert-success'>";
    echo " <button type='button' class='close' data-dismiss='alert'>×</button>
        <strong>Sukses</strong>.";
    echo $this->session->flashdata('berhasil');
    echo "</div>";
} elseif ($this->session->flashdata('edit')) {
    echo "<div class='alert alert-warning'>";
    echo $this->session->flashdata('edit');
    echo "</div>";
} elseif ($this->session->flashdata('hapus')) {
    echo "<div class='alert alert-danger'>";
    echo " <button type='button' class='close' data-dismiss='alert'>×</button>
           <strong>Sukses</strong>.";
    echo $this->session->flashdata('hapus');
    echo "</div>";
}
?>

<div class="row">
    <div class="span12">
        <div class="widget">
            <div class="widget-header"> <i class="icon-apple"></i>
            </div>
            <div class="widget-content">
                <table id="example" class="table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telpon</th>
                            <th>Gelar</th>
                            <th>Nama Pt</th>
                            <th>Tanggal pendaftaran</th>
                            <th>Nama sertifikat</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pendaftaran as $row):
                            ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->nama; ?></td>
                                <td><?php echo $row->alamat; ?></td>
                                <td><?php echo $row->no_telpon; ?></td>
                                <td><?php echo $row->gelar; ?></td>
                                <td><?php echo $row->nama_pt; ?></td>
                                <td><?php echo $row->tanggal; ?></td>
                                <td><?php echo $row->nama_sertifikat; ?></td>
                                <td><?php echo anchor('Admin/Pendaftaran/edit/' . $row->id_pendaftar, 'Edit', array('class' => 'btn btn-info')) ?></td>
                                <td><?php echo anchor('Admin/Pendaftaran/Hapus/' . $row->id_pendaftar, 'Hapus', array('class' => 'btn btn-danger')) ?></td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>

        </div>

    </div>
</div>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <?php echo form_open_multipart('Admin/Pendaftaran') ?>
                <div class="col-md-12">
                    <span class="icon-picture">
                        <label>Masukan Nama</label>
                        <li><i class="icon-ok"></i><input type="text" name="nama" class="form-control"></li>
                    </span>
                </div>
                <div class="col-md-12">
                    <label class="icon-apple">
                        <label>Masukan Alamat</label>
                        <li><i class="icon-map-marker"></i><textarea name="alamat" class="form-control"></textarea></li>
                    </label>
                </div>

                <div class="col-md-12">
                    <label class="icon-apple">
                      <label>Masukan Nomor Telpon</label>
                        <li><i class="icon-phone"></i><input  type="number" maxlength="13" name="no_telpon" class="form-control"></li>
                    </label>
                </div>
                
                <div class="col-md-12">
                    <label class="icon-group">
                    <label>Masukan Gelar</label>
                     <li><i class="icon-ok"></i><input type="text" name="gelar" class="form-control"></li>
                    </label>
                </div>
                <div class="col-md-12">
                    <label class="icon-pushpin">
                       <label>Masukan Nama Perusahaan (opsional)</label>
                        <li><i class="icon-pushpin"></i><textarea name="nama_pt" placeholder="nama pt" class="form-control"></textarea></li>
                    </label>
                </div>
                
                <div class="col-md-12">
                    <label class="icon-pushpin">
                        <label>Pilih Jenis sertifikasi</label>
                        <li><i class="icon-leaf"></i><?php echo cmb_dinamis('id_sertifikat', 'sertifikat', 'nama_sertifikat', 'id_sertifikat') ?></li>
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
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

                <div class="widget-content">
                    <?php echo form_open_multipart('Admin/Gallery/edit') ?>
                    <div>
                        <input type="hidden" id="id" name="id">
                        <label class="icon-android">Nama Foto</label>
                        <input type="text" id="nama_foto" name="nama_foto" required="" class="form-control">
                        <hr>
                        <label class="icon-apple">Nama Album</label>
                        <?php echo cmb_dinamis('id_album', 'album', 'nama_album', 'id_album') ?>
                        <hr>
                        <hr>
                        <input type="file" name="userfile" class="form-control">
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
            url: '<?php echo base_url() ?>Admin/Gallery/show_by_id',
            data: 'id=' + id,
            success: function (data) {
                var json = data,
                        obj = JSON.parse(json);
                $("#id").val(obj.id);
                $("#nama_foto").val(obj.nama_foto);
                $("#foto").val(obj.foto);
            }
        })
    }

</script>