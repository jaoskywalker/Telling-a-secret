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
    <header>
        <nav class="navbar">
        <a class="navbar-brand" href="#">
        <i class="bi bi-incognito"></i>
        <span class="mb-0 h1">Telling a Secret</span>
        </a>
    </nav>
    </header>
    <main>
        <section class="container">
        <div class="form-container">
                <div class="form-group" >
                    <textarea class="form-control" rows="3" cols="40" placeholder="Write your secret here"></textarea>
                    <hr>   
                <div class="row">
                    <div class="col-4">
                    <select class="form-control">
                    <option value="" disabled selected>Select your region</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                    </div>
                    <div class="col-8 text-right">
                    <button type="button" class="btn">Tell us</button>
                    </div>
                </div> 
            </div>
        </section>
    </main>
</body>
</html>