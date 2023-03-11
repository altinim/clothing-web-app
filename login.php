<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOG IN / CREATE ACCOUNT - ALTINIUM Offical Website</title>
    <link rel="stylesheet" href="./style/style.css" />
    <link rel="stylesheet" href="scripts/validation.js" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  </head>
  <body>
  <header id="header"><?php include 'header.php'?></header>
    <div id="logindiv">
      <div id="log">
        <section>
          <h3>LOG IN</h3>
          <form>
            <div class="field email">
              <input
                type="text"
                class="inputEmail input"
                placeholder="Email Address"
              />
              <div class="error error-txt size6">Email can't be blank</div>
            </div>
            <br />
            <div class="field password">
              <input
                type="password"
                class="inputPasswd input"
                placeholder="Password"
              />
              <div class="error error-txt size6">Password can't be blank</div>
            </div>
            <p class="size6 pointer">HAVE YOU FORGOTTEN YOUR PASSWORD?</p>
            <div class="bttn">
              <button type="submit">LOG IN</button>
            </div>
          </form>
        </section>
      </div>
      <div id="reg">
        <section>
          <h3>REGISTER</h3>
          <div class="size">
            <p>
              IF YOU STILL DON'T HAVE AN
              <span>
                <strong>ALTINIUM</strong> ACCOUNT, USE THIS OPTION TO ACCESS THE
                REGISTRATION FORM.
              </span>
            </p>

            <p>
              BY GIVING US YOUR DETAILS, PURCHASING IN <b>ALTINIUM</b>

              WILL BE FASTER AND AN ENJOYABLE EXPERIENCE.
            </p>
          </div>
          <div class="bttn">
            <button class="">
              <a href="register.php"> CREATE ACCOUNT</a>
            </button>
          </div>
        </section>
      </div>
    </div>
    <footer id="footer"><?php include 'footer.php'?></footer>
    <script src="scripts/login_validation.js"></script>
  </body>
</html>