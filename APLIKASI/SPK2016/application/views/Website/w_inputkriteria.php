<a class="brand" href="<?php echo base_url()?>index.php/kriteria"> Kriteria</a>

  <div class="nav-collapse">
        <ul class="nav">
          <li><a href="<?php echo base_url()?>index.php/kriteria/tambahkriteria" class="medium-box"><i class="icon-plus-sign icon-white">
          </i> Tambah Kriteria</a></li>
          <li><a onClick="return confirm('Anda yakin..???');" href="<?php echo base_url()?>index.php/kriteria/resetkriteria" class="medium-box"><i class="icon-remove-circle icon-white">
          </i> Reset Kriteria</a></li>
        </ul>
    </div>

	</div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
  <section>


  <form action="<?php echo base_url()?>index.php/kriteria/tambahkriteria" method="post" class="form-horizontal">

      <div class="control-group">
      <label class="control-label" >Keterangan Kriteria</label>
      <div class="controls">
          <input type="text" class="span6" name="Keterangan" placeholder="Keterangan....">
      </div>
      </div>

      <div class="control-group">
      <label class="control-label" >Jenis Kriteria</label>
      <div class="controls">
          <select name="jenis" class="chzn-select" style="width:180px;" tabindex="2">
          	<option value="0">Pilih Jenis</option>
          	<option value="Cost">Cost</option>
          	<option value="Benefit">Benefit</option>
          </select>
      </div>
      </div>

      <div class="control-group">
      <label class="control-label" >Nilai</label>
      <div class="controls">
          <input type="text" class="span6" name="nilai" placeholder="Nilai...." onkeyup="validAngka(this)">
      </div>
      </div>

      <div class="control-group">
      <div class="controls">
        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
        <button type="reset" class="btn">Hapus</button>
      </div>
      </div>


  </form>


  </section>
</div>