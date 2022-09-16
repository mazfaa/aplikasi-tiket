<x-master>
	<x-slot name="content">
		<div class="container mt-5">
        <div class="card mx-auto" style="width: 50%;">
          <div class="card-body mx-3">
            <h5 class="card-title text-center mt-3 mb-3"><i class="bi bi-box-arrow-in-right"></i> Login</h5>
            <form action="{{ route('login') }}" method="post">
            	@csrf
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Username</label>
                <input name="username" type="text" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <button type="submit" class="btn btn-primary mt-2"> <i class="bi bi-box-arrow-in-right"></i> Login</button>
            </form>
          </div>
        </div>
      </div>
	</x-slot>
</x-master>