<?php

include "Espinacas.php";
include "Verduras.php";

// funciones de utilidad

function imprimir_vars($obj) 
{
foreach (get_object_vars($obj) as $prop => $val) {
    echo "\t$prop = $val\n";
}
}

function imprimir_métodos($obj) 
{
$arr = get_class_methods(get_class($obj));
foreach ($arr as $método) {
    echo "\tfunción $método()\n";
}
}

function clase_padre($obj, $clase) 
{
if (is_subclass_of($GLOBALS[$obj], $clase)) {
    echo "El objeto $obj pertenece a la clase " . get_class($$obj);
    echo ", una subclase de $clase\n";
} else {
    echo "El objeto $obj no pertenece a una subclase de $clase\n";
}
}

// instancias 2 objetos

$vegetariano = new Verdura(true, "blue");
$frondoso = new Espinaca();

// imprimir información sobre los objetos
echo "vegetariano: CLASE " . get_class($vegetariano) . "\n";
echo "frondoso: CLASE " . get_class($frondoso);
echo ", PADRE " . get_parent_class($frondoso) . "\n";

// mostrar las propiedades de vegetariano
echo "\nvegetariano: Propiedades\n";
imprimir_vars($vegetariano);

// y los métodos de frondoso
echo "\nfrondoso: Métodos\n";
imprimir_métodos($frondoso);

echo "\nPadre:\n";
clase_padre("frondoso", "Espinaca");
clase_padre("frondoso", "Verdura");
?>