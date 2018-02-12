<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/assets/css/default.css" />
  <title>{pagetitle}</title>

</head>

<body>

<div class="d-flex p-3 flex-column container">
    <header class="masthead mb-auto">
        <div class="inner">
            <h3 class="masthead-brand">BentoBox</h3>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="/catalog">Catalog</a>
            </nav>
        </div>
    </header>

    <div>
        {content}
    </div>

    <footer class="mastfoot mt-auto text-center">
        <div class="inner">
            <p>BentoBox made with <a href="https://getbootstrap.com/">Bootstrap</a>, by BCIT Students</a>.<br>
                Page rendered in <strong class="text-white">{elapsed_time}</strong> seconds. <strong class="text-white">{ci_version}<strong></p>
        </div>
    </footer>
</div>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Homebrewed JS -->
<script src="/assets/js/default.js"></script>
</body>

</html>
