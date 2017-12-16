Skip to content
This repository
Search
Pull requests
Issues
Marketplace
Explore
 @SirHerbert
 Sign out
 Unwatch 2
  Star 0  Fork 0 fatihtkale/porto
 Code  Issues 0  Pull requests 0  Projects 0  Wiki  Insights
Tree: 273bb83980 Find file Copy pathporto/index.php
7a73187  19 minutes ago
@SirHerbert SirHerbert Nothing speciall
1 contributor
RawBlameHistory      
152 lines (137 sloc)  5.82 KB
<?php
  if (empty($_POST) === false) {
    $errors = array();
    $email = $_POST['email'];
    $lname = $_POST['lname'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    
    if (empty($name) === true || empty($email) == true || empty($message) == true || empty($lname) == true) {
        $errors[] = 'Please fill out everything in the form';
    }else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $errors [] = 'Please use a valid email';
        }
        if (ctype_alpha($name) ===  false) {
            $errors[] = 'Use a real name please';
        }
        if (ctype_alpha($lname) ===  false) {
            $errors[] = 'Use a real name please';
        }
    } 
    if (empty($errors) === true) {
        //send email
        mail('fatihtkale@gmail.com', 'New Email From Website', $message, 'From: ' .$email);
        header('Location: index.php?sent');
    }
}
?>
<html>

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
        crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Portfolio</title>

</head>

<body>
    <section class="intro">
        <div class="inner">
            <div class="content ">
                <h1 class="row title">RUDYHIMSELF</h1>
                <div class="row">
                    <div class="container">
                        <div class="bg">
                            <button class="btns">
                                <img src="img/info.png" alt=""> About us</img>
                            </button>
                            <button class="btns">
                                <img src="img/hire.png" alt=""> Hire us</img>
                            </button>
                            <button class="btns">
                                <img src="img/work.png" alt=""> Projects</img>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="AboutUs">
        <div class="container">
            <h1 style="text-align: center;">About Us</h1>
            <center>
                <div class="aboutusimgs">

                    <div class="row">

                        <div class="col-sm">
                            <img style="border:2px solid white; width:200px; height: 200px;" src="img/Fatih.jpg" alt="fatih">
                            <br>Fatih Toprakkale
                            <br>
                            <br> CEO & Developer
                        </div>

                        <div class="col-sm">
                            <img style="border:2px solid white; width:200px; height: 200px;" src="img/Rudy.jpg" alt="RUDY">
                            <br>Rudy
                            <br>
                            <br> CEO & Developer
                        </div>
                    </div>
                </div>
        </div>
        </div>
        </center>
        <br>
    </section>

    <section class="Hireus">
        <div class="row">
            <div class="container">
                <h1 style="text-align: center;">Hire us!</h1>
                <?php
                if (isset($_GET['sent']) === true) {
                    echo '<h1>Thanks for contacting us! </h1>';
                }else {
                    # code...
                if (empty($errors) === false) {
                    echo '<ul>';
                    foreach ($errors as $error) {
                        echo '<li>', $error ,'</li>';
                    }
                    echo '</ul>';
                }
                ?>
                <form action="" method="post">
                    <p>
                    <label for="name">Name:</label><br>
                    <input type="text" name="lname" id="lname" <?php if (isset($_POST['lname']) === true) { echo 'value="', strip_tags($_POST['lname']),'"'; } ?> >
                    </p>
                    <p>
                    <label for="name">Lastname:</label><br>
                    <input type="text" name="name" id="name" <?php if (isset($_POST['name']) === true) { echo 'value="', strip_tags($_POST['name']),'"'; } ?> >
                    </p>

                    <p>
                    <label for="email">Email:</label><br>
                    <input type="text" name="email" id="email" <?php if (isset($_POST['email']) === true) { echo 'value="', strip_tags($_POST['email']),'"'; } ?> >
                    </p>
                    <p>
                    <label for="message">Message:</label><br>
                    <textarea rows="" cols="" name="message" id="message"><?php if (isset($_POST['message']) === true) { echo strip_tags($_POST['message']); } ?> </textarea>
                    </p>
                    <p>
                        <button type="submit">Submit</button>
                    </p>
                </form>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
</body>

</html>
© 2017 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
API
Training
Shop
Blog
About