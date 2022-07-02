 <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Rincian Pembayaran</h4>
                            </div>
                            <div class="card-body">
                                 

                                    <div class="table-responsive">    
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pasien</th>
                                                <th>Harga Kamar</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Tanggal Keluar</th>
                                                <th>Lama Inap</th>
                                                <th>Harga Rawat Inap</th>
                                                <th>Harga Periksa</th>
                                                <th>Harga Obat</th>
                                                <th>Jenis Pembayaran</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pasien</th>
                                                <th>Harga Kamar</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Tanggal Keluar</th>
                                                <th>Lama Inap</th>
                                                <th>Harga Rawat Inap</th>
                                                <th>Harga Periksa</th>
                                                <th>Harga Obat</th>
                                                <th>Jenis Pembayaran</th>
                                                <th>Total</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_pembayaran as $pembayaran) {
                                            $tgl_masuk = ($pembayaran->tgl_masuk);
                                            $tgl_keluar = ($pembayaran->tgl_keluar);
                                            $lama_inap = ($tgl_keluar - $tgl_masuk);
                                            $hrg_rawat = ($lama_inap * $pembayaran->hrg_rawat);
                                            $hrg_ruang = ($pembayaran->hrg_ruang);
                                            $hrg_periksa = ($pembayaran->hrg_periksa);
                                            $hrg_obat = ($pembayaran->hrg_obat);
                                            $total = ($hrg_rawat + $hrg_ruang + $hrg_periksa + $hrg_obat);

                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $pembayaran->nm_pasien ?></td>
                                                <td><?php echo $pembayaran->tgl_masuk ?> </td>
                                                <td><?php echo $pembayaran->tgl_keluar ?> </td>
                                                <td><?php echo $lama_inap ?> </td>
                                                <td><?php echo $pembayaran->hrg_rawat ?> </td>
                                                <td><?php echo $pembayaran->hrg_ruang ?> </td>
                                                <td><?php echo $pembayaran->hrg_periksa ?> </td>
                                                <td><?php echo $pembayaran->hrg_obat ?> </td>
                                                <td><?php echo $total ?> </td>
                                                <td><?php echo $pembayaran->jenis_bayar ?> </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- order table -->
            </div>
    </div>