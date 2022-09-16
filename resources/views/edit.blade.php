<x-admin>
	<x-slot name="content">
		@foreach ($fields as $field)
			<form action="/admin/{{ $field->id }}" method="post">
	     @csrf
	     @method('put')
	      <div class="mb-3">
	        <label for="exampleInputPassword1" class="form-label">Nama</label>
	        <input name="name" type="text" value="{{ $field->name }}" class="form-control" id="exampleInputPassword1">
	      </div>
	      <div class="mb-3">
	        <label for="exampleInputEmail1" class="form-label">Alamat</label>
	        <input name="address" type="text" value="{{ $field->address }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	      </div><div class="mb-3">
	        <label for="exampleInputEmail1" class="form-label">Seat</label>
	        <input name="seat" type="text" value="{{ $field->seat }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	      </div><div class="mb-3">
	        <label for="exampleInputEmail1" class="form-label">Gate</label>
	        <input name="gate" type="text" value="{{ $field->gate }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	      </div><div class="mb-3">
	        <label for="exampleInputEmail1" class="form-label">Tema Konser</label>
	        <input name="watching" type="text" value="{{ $field->watching }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	      </div>
	      <div class="mb-3">
	        <label for="exampleInputEmail1" class="form-label">No. Telepon</label>
	        <input name="phone" type="text" value="{{ $field->phone }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	      </div>
	      <div class="mb-3">
	        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
	        <input name="date" type="date" value="{{ $field->date }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	      </div>
	      <div class="mb-3">
	        <label for="exampleInputEmail1" class="form-label">Waktu</label>
	        <input name="time" type="time" value="{{ $field->time }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	      </div>
	      <button type="submit" class="btn btn-success mt-2"><i class="bi bi-pencil-square"></i> Edit</button>
	    </form>
		@endforeach
	</x-slot>
</x-admin>