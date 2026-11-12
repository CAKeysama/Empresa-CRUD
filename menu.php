<link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
<script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

<nav class="navbar md:navbar-expand bg-1">
  <div class="container-fluid">
    <a class="navbar-brand" href="/Empresa-CRUD/">Inicio</a>
    <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" aria-hidden="true"></span>
    </button>
    <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
      <div class="drawer-header">
        <h5 class="drawer-title" id="navbarDrawerLabel">Navegação</h5>
        <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
      </div>
      <div class="drawer-body mb-2 md:mb-0">
        <ul class="nav navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="/Empresa-CRUD/funcionario/listar.php">Funcionários</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Empresa-CRUD/funcionario/adicionar.php">Adicionar Funcionário</a>
          </li>
        </ul>
      </div>
    </dialog>
  </div>
</nav>
