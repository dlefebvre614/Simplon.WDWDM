<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="?page=home">ExercicePOO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item active">
          <a class="nav-link" href="?page=home">Accueil
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <?php for ($i = 1; $i < 6; $i++) : ?>
          <li class="nav-item">
            <a class="nav-link" href="?page=ex<?= $i ?>">Exercice <?= $i ?></a>
          </li>
        <?php endfor ?>
      </ul>

    </div>
  </div>
</nav>