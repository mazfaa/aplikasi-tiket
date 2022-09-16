<nav class="container navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Agen X</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto mt-2">
        <li class="nav-item mx-4">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>

      <ul class="navbar-nav mt-2" style="margin-right: -50px;">
        <li class="nav-item mx-4">
          <a href="{{ route('ticket-check') }}" style="border: 1px solid blue; color: blue; border-radius: 5px; text-decoration: none; padding: 5px 10px;" onmouseenter="this.style.background = 'blue'; this.style.color = 'white'; this.style.transition = '.5s';" onmouseleave="this.style.background = 'white'; this.style.color = 'blue';" this.style.transition = '.5s';>Tiket Anda</a>
        </li>
      </ul>
    </div>
  </div>
</nav>