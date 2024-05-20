<?php
global $N;  // Variable global para seleccionar el numero de fila a mostrar
$N = 2; //entrada de la fila a mostrar

// Función para cargar el CSV y devolver una matriz
function load_csv($filename, $filas, $columnas) {
    $matriz = array();
    if (($archivo = fopen($filename, "r")) !== FALSE) {
        for ($i = 0; $i < $filas; $i++) {
            $linea = fgets($archivo);
            $datos_fila = explode(",", $linea);
            for ($j = 0; $j < $columnas; $j++) {
                $matriz[$i][$j] = isset($datos_fila[$j]) ? $datos_fila[$j] : "";
            }
        }
        fclose($archivo);
    }
    return $matriz;
}

// Función para obtener un valor de la matriz del CSV
function get_csv_cell($matriz, $fila, $columna) {
    return $matriz[$fila][$columna];
}

// Función para cargar la plantilla y reemplazar los datos
function load_template($filename) {
    return file_get_contents($filename);
}

function render_template($template, $data) {
    return str_replace(array_keys($data), array_values($data), $template);
}

// Uso de las funciones
$matriz = load_csv("Datos_w.csv", 3, 34);

    $datos = array(
        "{{NAME}}" => get_csv_cell($matriz, $N, 0),
        "{{OCCUPATION}}" => get_csv_cell($matriz, $N, 1),
        "{{PHOTO}}" => get_csv_cell($matriz, $N, 2),
        "{{ME}}" => get_csv_cell($matriz, $N, 3),
        "{{CONT_ME}}" => get_csv_cell($matriz, $N, 4),
        "{{CONTACT}}" => get_csv_cell($matriz, $N, 5),
        "{{PHONE}}" => get_csv_cell($matriz, $N, 6),
        "{{ADDRESS}}" => get_csv_cell($matriz, $N, 7),
        "{{EMAIL}}" => get_csv_cell($matriz, $N, 8),
        "{{EXPERIENCE}}" => get_csv_cell($matriz, $N, 9),
        "{{TIME_EXP1}}" => get_csv_cell($matriz, $N, 10),
        "{{EXP1_TITLE}}" => get_csv_cell($matriz, $N, 11),
        "{{EXP1_DESC}}" => get_csv_cell($matriz, $N, 12),
        "{{TIME_EXP2}}" => get_csv_cell($matriz, $N, 13),
        "{{EXP2_TITLE}}" => get_csv_cell($matriz, $N, 14),
        "{{EXP2_DESC}}" => get_csv_cell($matriz, $N, 15),
        "{{EDUCATION}}" => get_csv_cell($matriz, $N, 16),
        "{{TIME_EDU1}}" => get_csv_cell($matriz, $N, 17),
        "{{EDU1_TITLE}}" => get_csv_cell($matriz, $N, 18),
        "{{EDU1_DESC}}" => get_csv_cell($matriz, $N, 19),
        "{{TIME_EDU2}}" => get_csv_cell($matriz, $N, 20),
        "{{EDU2_TITLE}}" => get_csv_cell($matriz, $N, 21),
        "{{EDU2_DESC}}" => get_csv_cell($matriz, $N, 22),
        "{{SKILLS}}" => get_csv_cell($matriz, $N, 23),
        "{{SKILL1}}" => get_csv_cell($matriz, $N, 24),
        "{{SKILL2}}" => get_csv_cell($matriz, $N, 25),
        "{{SKILL3}}" => get_csv_cell($matriz, $N, 26),
        "{{SKILL4}}" => get_csv_cell($matriz, $N, 27),
        "{{ADD_SKILLS}}" => get_csv_cell($matriz, $N, 28),
        "{{ADD_SKILL1}}" => get_csv_cell($matriz, $N, 29),
        "{{ADD_SKILL2}}" => get_csv_cell($matriz, $N, 30),
        "{{ADD_SKILL3}}" => get_csv_cell($matriz, $N, 31),
        "{{ADD_SKILL4}}" => get_csv_cell($matriz, $N, 32),
    );

$template = load_template("new-email.html");
$html_renderizado = render_template($template, $datos);

echo $html_renderizado;
?>