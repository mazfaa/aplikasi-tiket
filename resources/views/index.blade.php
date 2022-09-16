<x-master>
	<x-slot name="content">
		<div class="container mt-5 mb-5">
        <div class="card mx-auto" style="width: 50%;">
          <div class="card-body mx-3">
            <div class="card-header mb-4">
              <h5 class="card-title text-center text-primary"><i class="bi bi-ticket-perforated-fill"></i> &nbsp; Daftar Tiket Agen X</h5>
            </div>
            <form action="" method="post">
            	@csrf
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama</label>
                <input name="name" type="text" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No. Telepon</label>
                <input name="phone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div><div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tema Konser</label>
                <input name="watching" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Masuk</label>
                <input name="date" id="date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Waktu Masuk</label>
                <input name="time" id="time" type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <input type="hidden" name="gate" id="gate" value="1">
                <input type="hidden" name="seat" id="seat">
              </div>
              <button type="submit" class="btn btn-primary mt-2"><i class="bi bi-send"></i> Pesan</button>
            </form>
          </div>
        </div>
      </div>
	</x-slot>
</x-master>