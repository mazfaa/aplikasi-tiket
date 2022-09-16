<x-master>
	<x-slot name="content">
		<div class="container mt-5 mb-5">
        <div class="card mx-auto" style="width: 50%;">
          <div class="card-body mx-3">
            <h5 class="card-title text-center mt-3 mb-3">Pendaftaran Tiket</h5>
            <form action="" method="post">
            	@csrf
              <!-- <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID Ticket</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div> -->
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
              </div><!-- 
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No. Gerbang</label>
                <input name="" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Durasi Menonton</label>
                <input name="" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No. Kursi</label>
                <input name="" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div> -->
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                <input name="date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Waktu</label>
                <input name="time" type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <button type="submit" class="btn btn-primary mt-2">Pesan</button>
            </form>
          </div>
        </div>
      </div>
	</x-slot>
</x-master>