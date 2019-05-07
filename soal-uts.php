<script src="js/hitung-uts.js"></script>
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
        
                                       Soal UTS B
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label class="control-label">Tgl. Transaksi</label>
                                                        <input type="date" class="form-control" id="tgl_transaksi" name="tgl_transaksi"/>
                                                        </div>
                                                </div>
                                                <div class="col-sm-2">
                                                <div class="form-group">
                                                        <label class="control-label">NIS/N</label>
                                                        <input type="text" class="form-control" id="nis" name="nis"/>
                                                        </div>
                                                </div>
                                                <div class="col-sm-6">
                                                <div class="form-group">
                                                        <label class="control-label">Nama Siswa</label>
                                                        <input type="text" class="form-control" id="nama" name="nama"/>
                                                        </div>
                                                </div>
                                                <div class="col-sm-2">
                                                <div class="form-group">
                                                        <label class="control-label">Kelas</label>
                                                        <input type="text" class="form-control" id="kelas" name="kelas"/>
                                                        </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <table class="table">
                                                    <tr>
                                                        <th width="5%"></th>
                                                        <th width="30%">URAIAN</th>
                                                        <th width="15%">NOMINAL</th>
                                                        <th width="20%">SUDAH DIBAYAR</th>
                                                        <th width="15%">KEKURANGAN</th>
                                                        <th width="15%">DIBAYARKAN</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>SPI Golongan B</td>
                                                        <td>20.000</td>
                                                        <td>
                                                            <input type="text" class="form-control" id="sdhdibayar1" name="sdhdibayar1" placeholder="0"/>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" id="kekurangan1" name="kekurangan1" placeholder="0"/>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" id="dibayarkan1" name="dibayarkan1" placeholder="0"/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    <td>2</td>
                                                        <td>Ujian Tengah Semester (UTS)</td>
                                                        <td>125.000</td>
                                                        <td>
                                                            <input type="text" class="form-control" id="sdhdibayar2" name="sdhdibayar2" placeholder="0"/>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" id="kekurangan2" name="kekurangan2" placeholder="0"/>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" id="dibayarkan2" name="dibayarkan2" placeholder="0"/>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                    <td>3</td>
                                                        <td>Ujian Akhir Semester (UAS)</td>
                                                        <td>125.000</td>
                                                        <td>
                                                            <input type="text" class="form-control" id="sdhdibayar3" name="sdhdibayar3" placeholder="0"/>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" id="kekurangan3" name="kekurangan3" placeholder="0"/>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" id="dibayarkan3" name="dibayarkan3" placeholder="0"/>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="text-right"><b>Total</b>
                                                        </td>
                                                        <td colspan="2">
                                                            <input type="text" class="form-control" id="total" name="total" placeholder="0"/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    <td colspan="4" class="text-right"><b>Jumlah Bayar</b>
                                                        </td>
                                                        <td colspan="2">
                                                            <input type="text" class="form-control" id="jml_byr" name="jml_byr" placeholder="0"/>
                                                        </td> 

                                                    </tr>
                                                    <tr>
                                                    <td colspan="4" class="text-right"><b>Kembalian</b>
                                                        </td>
                                                        <td colspan="2">
                                                            <input type="text" class="form-control" id="kembalian" name="kembalian" placeholder="0"/>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="row">

                                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Lihat History Pembayaran </button>
                                            <button class="btn btn-success btn-sm"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
                                       
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>