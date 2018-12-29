<section class="content">
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">Tambah Buku</h3>
				</div>
				<!-- box header -->
				<div class="box-body">
					<form action="<?=site_url('buku/create');?>" method="post" accept-charset="utf-8">
						<div class="box-body">
							<div class="form-group">
								<label>Judul Buku</label>
								<input type="text" name="judul buku" class="form-control" value=""
								placeholder="Masukan Judul Buku" required="required">
							</div>
							<div class="form-group">
								<label>Kategori</label>
								<select name="id_kategori" size="1" class="form-control">
									<?php
									foreach ($show_kategori as $key => $data_kategori) {
										echo'<option value="'.$data_kategori->id_kategori.'">'.$data_kategori->nama_kategori.'</option>';	
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label>Pengarang</label>
								<input type="text" name="pengarang" class="form-control" value="" placeholder="Masukan Nama Pengarang" required="required">
							</div>
							<div class="form-group">
								<label>Tahun Terbit</label>
								<input type="date" class="form-control" name="thn_terbit" min="0">
							</div>
							<div class="form-group">
								<label for="exampleinputtext1">Penerbit</label>
								<input type="text" name="penerbit" class="form-control" id="exampleinputtext1" placeholder="Penerbit" value="" required="">
							</div>
							<div class="form-group">
								<label for="exampleinputtext1">ISBN</label>
								<input type="text" name="isbn" class="form-control" id="exampleinputtext1" placeholder="ISBNt" value="" required="">
							</div>
							<div class="form-group">
								<label for="exampleinputtext1">Jumlah</label>
								<input type="text" name="jumlah_buku" class="form-control" id="exampleinputtext1" placeholder="0" value="" required nim="0">
							</div>
							<div class="form-group">
								<label for="exampleinputpassword1">Rak</label>
								<select name="lokasi" size="1" class="form-control">
									<option value="1">Rak 1</option>
									<option value="2">Rak 2</option>
									<option value="3">Rak 3</option>
									<option value="4">Rak 4</option>
									<option value="5">Rak 5</option>
								</select>
							</div>
						</div>
						<!-- box body -->
						<div class="box-footer">
							<button type="button" class="btn btn-default"> <i class="fa fa-arrow-circle-left"></i>Batal</button>
							<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-send"></i>Tambah </button>
						</div>
					</form>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>