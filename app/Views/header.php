<header class="bg-dark">
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-dark position-relative">
            <a class="navbar-brand" href="<?=URL?>">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Menu alinhado à esquerda -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL?>" data-tooltip="tooltip" title="Página Inicial">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL?>/paginas/sobre" data-tooltip="tooltip" title="Sobre nós">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL?>/paginas/contato" data-tooltip="tooltip" title="Contato">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- Botões alinhados à direita da tela -->
            <div class="position-absolute" style="right: 0;">
                <a class="btn btn-info mr-3" 
                href="#" data-tooltip="tooltip" title="Não tem uma conta? Cadastre-se">Cadastre-se</a>
                <a class="btn btn-info" href="#" data-tooltip="tooltip" title="Tem uma conta? Faça login">Entrar</a>
            </div>
        
        </nav>
    </div>
</header>


<!--<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>-->