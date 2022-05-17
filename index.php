<?php
$url = "http://localhost:8080/posts/titlesearch";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META TAGS-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP AND CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="css/style.css" rel="stylesheet">

    <title>Telling a Secret</title>
</head>

<body>

    <!-- HEADER LINK-->
    <?php
    include 'templates/header/header.php';
    ?>
    <main>

        <!-- INPUT FORM ----------------------------------------------------------------------------------------->
        <section class="container">
            <div class="form-container">
                <div class="form-group">
                    <form action="scripts/SaveNewPost.php" method="POST">
                        <textarea class="form-control" rows="3" cols="40" placeholder="Write your secret here" name="body"></textarea>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <select class="form-control">
                                    <option value="" disabled selected>Region</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="col-8 text-right">
                                <button type="submit" class="btn">Tell us</button>
                            </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- BADGE DIV --------------------------------------------------------------------------------------------->
        <section class="selection-posts">
            <h6>New Posts <span class="badge bg-secondary bg-purple">New</span></h6>
        </section>
        <!-- POSTS DIV --------------------------------------------------------------------------------------------->
        <section class="container">
            <div class="row">

                <?php foreach ($json_data as &$users) {

                    echo "<div class='col-sm-6 card-div'>
                    <div class='card'>
                        <div class='card-body'>
                        
                            <h5 class='card-title'>" . $users['title'] .  "</h5>
                            <p class='card-text'>" . $users['body'] . "</p>
                            <div class='row'>
                                <button type='button' class='btn card-btn'>
                                    <i class='bi bi-hand-thumbs-up'></i>
                                    Likes <span class='badge badge-dark'>9</span>
                                    <span class='sr-only'>people liked</span>
                                </button>
                                <button type='button' class='btn'>
                                    <i class='bi bi-chat-dots'></i>
                                    Comment <span class='badge badge-dark'>9</span>
                                    <span class='sr-only'>people comments</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            ";
                } ?>
            </div>
        </section>
    </main>
    <!-- FOOTER LINK -->
    <?php
    include 'templates/footer/footer.php';
    ?>
</body>

</html>