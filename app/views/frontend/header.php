<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['page_title']?></title>
    <link rel="stylesheet" href="<?=ASSETS . THEME ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=ASSETS . THEME ?>fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?=ASSETS . THEME ?>css/templatemo-style.css">
    <link rel="stylesheet" href="<?=ASSETS . THEME ?>css/style.css">

<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>
<body>

<nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-film mr-2"></i>
                Catalog-Z
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active" aria-current="page" href="index">Enter into race!</a>
                </li>
    
        
                <?php if(isset($data['user_data'])): ?> 
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="#"><?=$data['user_data']->name?></a>
                </li>
                <?php endif; ?>
                <?php if(isset($data['user_data'])): ?>

                <li class="nav-item">
                    <a class="nav-link nav-link-2" href="result">Result of race!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="logout">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="<?=ROOT?>profile">Profile</a>
                </li>
                <?php else: ?>

                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="signup">Register</a>
                </li>
                <?php endif; ?>

                <?php if(isset($data['user_data']) && $data['user_data']->rank == 'admin'):?>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="<?=ROOT?>admin">Admin</a>
                </li>
                <?php endif; ?>
             
            </ul>
            </div>
        </div>
    </nav>

