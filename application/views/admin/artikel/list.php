<div class="row">
    <div class="span12">
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
            <div class="widget-header"><?php echo anchor('Admin/Artikel/add', 'Tambah Artikel', array('class' => 'btn btn-success btn-sm"')) ?> 
                <i class="icon-th-list"></i>
                <h3>Semua Artikel</h3>
            </div>
            <div class="widget-content">
                <table id="example" class="table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Foto</th>
                            <th>Nama Kategori</th>
                            <th>Detail Di Inputkan</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($artikel as $row):
                            ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->judul; ?></td>
                                <td><img width="50" src="<?php echo base_url() ?>uploads/artikel/<?php echo $row->foto ?>"  alt="image" /></td>
                                <td><?php echo $row->nama_kategori; ?></td>
                                <td><?php echo $row->tanggal; ?></td>
                                <td><?php echo anchor('Admin/Artikel/edit/' . $row->id_artikel, 'Edit', array('class' => 'btn btn-info')) ?></td>
                                <td><?php echo anchor('Admin/Artikel/Hapus/' . $row->id_artikel, 'Hapus', array('class' => 'btn btn-danger')) ?></td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>