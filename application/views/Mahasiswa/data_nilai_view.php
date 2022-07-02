 <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-book"></i> &nbsp;&nbsp;&nbsp;Nilai Mahasiswa</h4>
                            </div>
                            <div class="card-body">
                                
                                
                                
                                    <div class="form-body">
                                    <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Mata Kuliah</th>
                                                <th>Nilai UTS</th>
                                                <th>Nilai UAS</th>
                                                <th>Rata - Rata</th>
                                                <th>Grade</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Mata Kuliah</th>
                                                <th>Nilai UTS</th>
                                                <th>Nilai UAS</th>
                                                <th>Rata - Rata</th>
                                                <th>Grade</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_nilai as $nilai) {
                                            $uts = ($nilai->uts * 40)/100;
                                            $uas = ($nilai->uas * 60)/100;
                                            $rata = $uts + $uas;

                                            if($rata >= 85){
                                                $grade = 'A';
                                            }
                                            else if($rata >= 75){
                                                 $grade = 'B';
                                            }
                                            else if($rata >= 65){
                                                 $grade = 'C';
                                            }
                                            else if($rata >= 55){
                                                 $grade = 'D';
                                            }
                                            else{
                                                 $grade = 'E';
                                            }

                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $nilai->nm_matkul ?></td>
                                                <td><?php echo $nilai->uts ?></td>
                                                <td><?php echo $nilai->uas ?></td>
                                                <td><?php echo $rata ?></td>
                                                <td><?php echo $grade ?></td>
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