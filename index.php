<?php
  require_once('./vendor/autoload.php');
  $loader = new \Twig\Loader\FilesystemLoader('./templates');
  $twig = new \Twig\Environment($loader);
  if($_SERVER['REQUEST_URI'] === "/"){
    echo $twig->render('home.html.twig');
  }else if($_SERVER['REQUEST_URI'] === "/restaurateurs"){
    echo $twig->render('restaurateurs.html.twig');
  }else if($_SERVER['REQUEST_URI'] === "/team"){
    echo $twig->render('team.html.twig');
  }else{
    echo "404 not found";
  }
?>