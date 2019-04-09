<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://www.google.com/recaptcha/api.js?render=CLE CLIENT" async defer></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('CLE CLIENT', {action: 'homepage'}).then(function (token) {
                console.log(token);
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>
</head>
<body>
    <form action="contact/contact.php" method="post">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" required class="form-control" id="nom">
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" required class="form-control" id="prenom">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" required class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" required id="message" rows="3"></textarea>
        </div>
        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
        <br/>
        <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
    </form>
</body>
</html>