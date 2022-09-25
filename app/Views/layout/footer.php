<?php if (logged_in(false)) : ?>
<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; 2022 <div class="bullet"></div> Made with &hearts; &#8212; <a href="#">Pawppy</a>
    </div>
    <div class="footer-right">

    </div>
</footer>
</div>
</div>

<?php endif; ?>

<!-- General JS Scripts -->
<script src="<?= base_url() ?>/template/node_modules/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url() ?>/template/node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= base_url() ?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
<script src="<?= base_url() ?>/template/assets/js/sweetalert/dist/sweetalert2.all.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
        </script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->
<script src="<?= base_url() ?>/template/assets/js/stisla.js"></script>

<!-- JS Libraies -->

<script src="<?= base_url() ?>/template/node_modules/summernote/dist/summernote-bs4.js"></script>
<script src="<?= base_url() ?>/template/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<script src="<?= base_url() ?>/template/node_modules/select2/dist/js/select2.full.min.js"></script>
<script src="<?= base_url() ?>/template/node_modules/selectric/public/jquery.selectric.min.js"></script>




<!-- Contact Form -->
<!-- <script src="plugins/jquery/contact.js"></script> -->



<!-- Template JS File -->
<script src="<?= base_url() ?>/template/assets/js/scripts.js"></script>
<script src="<?= base_url() ?>/template/assets/js/custom.js"></script>



<!-- Page Specific JS File -->

<?php if ($title == "Tambah Basis Pengetahuan" || $title == "Ubah Data Basis Pengetahuan") : ?>
<!-- Modal Penyakit-->
<div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" data-penyakit="modal"
    id="modal-penyakit">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pilih Penyakit</h5>
                <div class="col-8">
                    <input type="text" class="form-control" placeholder="Cari penyakit.." name="keyword" id="cari-text">
                </div>
            </div>
            <div class="modal-body" id="table-penyakit-modal">
                <!-- Data dari Controller -->
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <!-- <button type="button" class="btn btn-primary">Simpan</button> -->
            </div>
        </div>
    </div>
</div>

<!-- Modal Gejala -->
<!-- <div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" id="modal-gejala">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pilih Gejala</h5>
                <div class="col-8">
                    <input type="text" class="form-control" placeholder="Cari gejala.." name="keyword"
                        id="cari-gejala-text">
                </div>
            </div>
            <div class="modal-body" id="table-gejala-modal">
               Data dari Controller 
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
               <button type="button" class="btn btn-primary">Simpan</button> 
            </div>
        </div>
    </div>
</div> -->

<?php endif; ?>


<div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" id="modal-role">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Role</h5>

            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/auth/update/') ?>" method="POST">
                    <div class="row">

                        <input type="hidden" value="" id="id_user" name="id_user">
                        <div class="col-lg-12 col-md-12 form-group">
                            <label class="mr-3 label-block">Role</label>
                            <select class="form-control" name="role">
                                <option value="1">Site Administrator</option>
                                <option value="2">General User</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>

            </div>
            </form>
        </div>
    </div>
</div>
</body>

</html>