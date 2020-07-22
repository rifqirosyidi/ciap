<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title; ?></title>
</head>

<body>

    <nav>
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo">Rief</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="<?= base_url('/'); ?>">Home</a></li>
                <li><a href="<?= base_url('/pages/about'); ?>">About</a></li>
                <li><a href="collapsible.html">Contact</a></li>
            </ul>
        </div>
    </nav>