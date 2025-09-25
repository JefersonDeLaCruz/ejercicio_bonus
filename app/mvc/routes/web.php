<?php
use lib\Route;

Route::get("/", function () {
    echo "RUTA RAIZ";
});

Route::get("/inicio", function () {
    require_once("../app/views/inicio.php");
});


Route::get("/contacto", function () {
    require_once("../app/views/contacto.php");
});

Route::get("/lenguaje", function () {
    require_once("../app/views/lang.php");
});

Route::dispatch();