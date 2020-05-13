<!-- <?php
// Message vars
$msg = '';
$msgClass = '';

// Check for Submit
 if(filter_has_var(INPUT_POST, 'submit')) {
     // Get Form Data
     $name = htmlspecialchars($_POST['name']);
     $email = htmlspecialchars($_POST['email']);
     $message = htmlspecialchars($_POST['message']);

     // Check Required Fields
     if(!empty($email) && !empty($name) && !empty($message)) {
        // Passed
        // Check Email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            // Failed
            $msg = 'Ongeldig e-mail adres';
            $msgClass = 'alert-danger';
        } else {
            // Passed
            $toEmail = 'info@skituning.nl';
            $subject = 'Contact Request From '.$name;
            $body = '<h2>Contact Request</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Message</h4><p>'.$message.'</p>
            ';

            // Email Headers
            $headers = "MIME-Version: 1.0" ."\r\n";
            $headers .="Content-Type:text/html;charset=UTF-8" ."\r\n";

            // Additional Headers
            $headers .= "From: " .$name. "<".$email.">". "\r\n";

            if(mail($toEmail, $subject, $body, $headers)) {
                // Email sent
                $msg = 'Uw email is verzonden!';
                $msgClass = 'alert-success';
            } else {
                // Failed
                $msg = 'Het lijkt erop dat er iets mis is gegaan. Probeer het later nogmaals. Excuses voor het ongemak.';
                $msgClass = 'alert-danger';
            }
        }
     } else {
        // Failed
        $msg = 'Please fill in all the fields';
        $msgClass = 'alert-danger';
     }
 }

?>

<!DOCTYPE <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Esmay's Beauty Factory - Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />

    <link
      href="https://fonts.googleapis.com/css?family=Gupter:400,700|Oswald:400,600,700&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/46c93ff866.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css?family=Amatic+SC|Courgette|Dancing+Script|Quicksand:300,400,500,600|Rubik:300i,400&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="image/png" href="img/LogoEsmay.png" />
  </head>

  <body>
    <header>
      <div class="header-image">
        <img src="img/LogoEsmay-1.png" alt="Logo Esmay's Beauty Factory" />
      </div>

      <nav id="nav">
        <span class="navbar-toggle" id="js-navbar-toggle">
          <i class="fas fa-bars"></i>
        </span>
        <a href="#" class="logo"
          ><img src="img/IMG_7475.PNG" alt="klein logo EBF"
        /></a>
        <ul class="main-nav" id="js-menu">
          <li>
            <a href="index.html" class="nav-links">Esmay's Beauty Factory</a>
          </li>
          <li>
            <a href="prijs.html" class="nav-links">Prijslijst</a>
          </li>
          <li>
            <a href="contact.html" class="nav-links">Contact</a>
          </li>
          <li>
            <a
              href="https://www.instagram.com/esmaysbeautyfactory/"
              target="_blank"
              class="nav-links"
              ><i class="fab fa-instagram"></i
            ></a>
          </li>
          <li>
            <a
              href="https://www.facebook.com/esmaysbeautyfactory/"
              target="_blank"
              class="nav-links"
              ><i class="fab fa-facebook-square"></i
            ></a>
          </li>
        </ul>
      </nav>
    </header>

    <main id="contact">
      <h1 class="welkom">Neem contact op</h1>
      <p class="intro">
        Heeft u vragen of wilt u een afspraak maken? Neem gerust contact op.<br />
        Ik kom zo snel mogelijk bij u terug.
      </p>

      <div class="container">
        <?php if($msg != ''): ?>
        <div class="<?php echo $msgClass; ?>">
          <?php echo $msg; ?>
        </div>
        <?php endif; ?>

        <form
          id="contact-form"
          name="contact-form"
          method="POST"
          action="<?php echo $_SERVER[' PHP_SELF']; ?>"
        >
          <input
            type="text"
            id="name"
            name="name"
            class=""
            placeholder="Naam"
            value="<?php echo isset($_POST['name']) ? $name : '' ; ?>"
          />

          <input
            type="text"
            id="email"
            name="email"
            class=""
            placeholder="E-mail"
            value="<?php echo isset($_POST[' email']) ? $email : '' ; ?>"
          />

          <textarea
            type="text"
            id="message"
            name="message"
            rows="2"
            class=""
            placeholder="Uw bericht">
          <?php echo isset($_POST['message']) ? $message : ''; ?>
        </textarea>

          <button type="submit" name="submit" class="btn">Verstuur</button>
        </form>
      </div>
    </main>

    <footer>
      <div class="icons">
        <a href="mailto:e.beautyfactory@outlook.com"
          ><i class="far fa-envelope"></i
        ></a>
        <a href="https://www.instagram.com/esmaysbeautyfactory/" target="_blank"
          ><i class="fab fa-instagram"></i
        ></a>
        <a href="https://www.facebook.com/esmaysbeautyfactory/" target="_blank"
          ><i class="fab fa-facebook-square"></i
        ></a>
      </div>
      <div class="cher-fez">
        <p>
          2020 &copy;
          <a href="https://www.cher-fez.com" target="_blank">Cher-Fez</a>
        </p>
      </div>
    </footer>

    <script src="main.js"></script>
  </body>
</html> -->
