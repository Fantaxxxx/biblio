
<div class="container-fluid mt-3">
    <!-- Colonne droite : Formulaire de connexion -->
    <div class="col-md-4">
      <div style="border:1px solid #000; padding:15px; margin-top:20px; max-width:300px;">
        <h5 style="text-align:center; margin-bottom:20px;">Se connecter</h5>
        <form action="login.php" method="post">
          <div class="mb-3">
            <label for="identifiant" class="form-label">Identifiant</label>
            <input type="text" class="form-control" id="identifiant" name="identifiant" required>
          </div>
          <div class="mb-3">
            <label for="motdepasse" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="motdepasse" name="motdepasse" required>
          </div>
          <div style="text-align:center;">
            <button type="submit" class="btn btn-primary">Connexion</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
