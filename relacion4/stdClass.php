<?php
// ----- OBJETO INICIAL -----
$moduloDWES = new stdClass();
$moduloDWES->modulo = "Desarrollo Web en Entorno Servidor";
$moduloDWES->acronimo = "DWES";
$moduloDWES->curso = 2;
$moduloDWES->descripcion = "El módulo de Desarrollo Web en Entorno Servidor (DWES) se centra en la creación de aplicaciones web dinámicas utilizando tecnologías del lado del servidor. Los estudiantes aprenderán a desarrollar sitios web interactivos y funcionales, manejando bases de datos, sesiones y seguridad. El módulo abarca lenguajes como PHP, así como el uso de servidores web y sistemas de gestión de bases de datos como MySQL.";
$moduloDWES->teacher = "Pilar";

// ----- CONVERSIONES -----
$arrayDWES = (array) $moduloDWES;
$nuevoModuloDWES = (object) $arrayDWES;