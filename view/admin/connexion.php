      <!DOCTYPE html>
<html>
<title><?= MySettings::$_society ?> - Identification</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/view/admin/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body>
 <div class="w3-content w3-container w3-padding-64" style="max-width:600px">

        <h1 class="w3-center">Page d'administration</h1>
      <form class="w3-card-2 w3-container w3-margin" action="" method="post">
      <?php require_once 'view/reponse.php' ;?>
        <div class="w3-section">
          <label><b>Pseudo</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
          <label><b>Mot de passe</b></label>
          <input class="w3-input w3-border" type="Password" placeholder="Enter Password" name="psw" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
        </div>
      </form>

  </div>

</body>