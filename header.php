<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Baloo+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
	<title><?php echo $titre ?></title>
</head>
<body>
    <!-- début du header -->
	<header>
		<h1>Yann Bauduin</h1>
		<h2>Web Designer & Développeur PHP/Synfony</h2>
	</header>
    <!-- fin du header -->

    <!-- Début de menu de naviguation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Yann Bauduin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Accueil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="index.php#presentation">Présentation<a>
                        <a class="dropdown-item" href="index.php#formation">Formations</a>
                        <a class="dropdown-item" href="index.php#competences">Compétences</a>
                        <a class="dropdown-item" href="index.php#experiences">Expériences</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="creation.php">Mes créations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Fin du menu de naviguation -->
