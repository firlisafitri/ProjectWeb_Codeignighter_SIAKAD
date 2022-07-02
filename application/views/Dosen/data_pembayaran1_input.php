 <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                    
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Input Pembayaran</h4>
                            </div>
                            <div class="card-body">

                                    <form action="<?php echo base_url().'index.php/Admin/Admin/data_pembayaran1_input_aksi' ?>" method="POST">

                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <?php
                                                    foreach ($tbl_pendaftaran as $pendaftaran) {
                                                    ?>
                                                    <input type="hidden" class="form-control" name="id_pendaftaran" value="<?php echo $pendaftaran->id_pendaftaran ?>" >
                                                    <?php } ?>
                                                </div>
                                            </div>
                                    </div>

                                    <div class="table-responsive">    
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pasien</th>
                                                <th>Harga Kamar</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Tanggal Keluar</th>
                                                <th>Lama Penginapan</th>
                                                <th>Harga Rawat Inap</th>
                                                <th>Harga Periksa</th>
                                                <th>Harga Obat</th>
                                                <th>Jenis Pembayaran</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pasien</th>
                                                <th>Harga Kamar</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Tanggal Keluar</th>
                                                <th>Harga Rawat Inap</th>
                                                <th>Harga Periksa</th>
                                                <th>Harga Obat</th>
                                                <th>Jenis Pembayaran</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_pendaftaran as $pendaftaran) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $pendaftaran->nm_pasien ?></td>
                                                <td><?php echo $pendaftaran->jenis_bayar ?> </td>
                                                <td>
                                                    <input type="Checkbox" name="id_pendaftaran[]" checked="checked" hidden="hidden" value="<?php echo $pendaftaran->id_pendaftaran ?>">

                                                    <input type="text" name="hrg_ruang[]" class ="form-control">
                                                </td>
                                                <td>
                                                    <input type="date" name="tgl_masuk[]" class ="form-control">
                                                </td>
                                                <td>
                                                    <input type="date" name="tgl_keluar[]" class ="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" name="hrg_rawat[]" class ="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" name="hrg_periksa[]" class ="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" name="hrg_obat[]" class ="form-control">
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <p></p>
                                <div class="form-actions">
                                        <div class="text-left">
                                            <input type="submit" class="btn btn-info" value="Simpan Data">
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- order table -->
            </div>












    </div>