    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="{{ env('APP_URL') }}home">Ecom</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ env('APP_URL') }}nos-produits">Nos Produits</a>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-item">
            <a class="nav-link" href="{{ env('APP_URL') }}nos-produits">Mon pannier</a>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-item">
            <a class="nav-link" href="{{ env('APP_URL') }}nos-produits">Gérer les Produits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ env('APP_URL') }}nos-produits">Gérer les Catégories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ env('APP_URL') }}nos-produits">Gérer les Utilisateurs</a>
          </li>
        </ul>
      </div>

      <button class="btn btn-primary">
        Se connecter
      </button>
    </nav>