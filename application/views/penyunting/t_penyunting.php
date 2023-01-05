<div class="col-12 grid-margin stretch-card">
              <div class="card">
              <div class="card-body">
                  <h3 class="card-title">Perpustakaan BPS Kota Malang</h3>
                  <p class="card-description">
                    Form Data Penyunting
                  </p>
                  <hr>
                  <form method="post" action="<?= base_url()?>penyunting/simpan">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Penyunting</label>
                      <input type="text" name="nama_penyunting" class="form-control" id="exampleInputName1" placeholder="Nama Penyunting">
                    </div>
                    
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Simpan </button>
                    <a href="<?= base_url()?>penyunting" class="btn btn-danger"> Batal</a>
                    </div>

                  </form>
                </div>
              </div>
            </div>