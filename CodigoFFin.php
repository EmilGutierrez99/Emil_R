<?php
// Función para obtener el número de fila a mostrar
function Prin_csv() {
    return 10; // Aquí estableces el valor de la fila a mostrar
}

// Función para cargar el CSV y devolver una matriz
function load_csv($filename, $filas, $columnas) {
    $matriz = array();
    if (($archivo = fopen($filename, "r")) !== FALSE) {
        for ($i = 0; $i <= $filas; $i++) {
            $linea = fgets($archivo);
            $datos_fila = explode(",", $linea);
            for ($j = 0; $j <= $columnas; $j++) {
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

// Uso de las funciones
$matriz = load_csv("Datos_w.csv", 10, 34);
$Print_fila = Prin_csv();

// Función para cargar la plantilla y reemplazar los datos
function load_template($filename) {
    return file_get_contents($filename);
}

function render_template($template, $data) {
    return str_replace(array_keys($data), array_values($data), $template);
}



    $datos = array(
        "{{NAME}}" => get_csv_cell($matriz, $Print_fila, 0),
        "{{OCCUPATION}}" => get_csv_cell($matriz, $Print_fila, 1),
        "{{PHOTO}}" => get_csv_cell($matriz, $Print_fila, 2),
        "{{ME}}" => get_csv_cell($matriz, $Print_fila, 3),
        "{{CONT_ME}}" => get_csv_cell($matriz, $Print_fila, 4),
        "{{CONTACT}}" => get_csv_cell($matriz, $Print_fila, 5),
        "{{PHONE}}" => get_csv_cell($matriz, $Print_fila, 6),
        "{{ADDRESS}}" => get_csv_cell($matriz, $Print_fila, 7),
        "{{EMAIL}}" => get_csv_cell($matriz, $Print_fila, 8),
        "{{EXPERIENCE}}" => get_csv_cell($matriz, $Print_fila, 9),
        "{{TIME_EXP1}}" => get_csv_cell($matriz, $Print_fila, 10),
        "{{EXP1_TITLE}}" => get_csv_cell($matriz, $Print_fila, 11),
        "{{EXP1_DESC}}" => get_csv_cell($matriz, $Print_fila, 12),
        "{{TIME_EXP2}}" => get_csv_cell($matriz, $Print_fila, 13),
        "{{EXP2_TITLE}}" => get_csv_cell($matriz, $Print_fila, 14),
        "{{EXP2_DESC}}" => get_csv_cell($matriz, $Print_fila, 15),
        "{{EDUCATION}}" => get_csv_cell($matriz, $Print_fila, 16),
        "{{TIME_EDU1}}" => get_csv_cell($matriz, $Print_fila, 17),
        "{{EDU1_TITLE}}" => get_csv_cell($matriz, $Print_fila, 18),
        "{{EDU1_DESC}}" => get_csv_cell($matriz, $Print_fila, 19),
        "{{TIME_EDU2}}" => get_csv_cell($matriz, $Print_fila, 20),
        "{{EDU2_TITLE}}" => get_csv_cell($matriz, $Print_fila, 21),
        "{{EDU2_DESC}}" => get_csv_cell($matriz, $Print_fila, 22),
        "{{SKILLS}}" => get_csv_cell($matriz, $Print_fila, 23),
        "{{SKILL1}}" => get_csv_cell($matriz, $Print_fila, 24),
        "{{SKILL2}}" => get_csv_cell($matriz, $Print_fila, 25),
        "{{SKILL3}}" => get_csv_cell($matriz, $Print_fila, 26),
        "{{SKILL4}}" => get_csv_cell($matriz, $Print_fila, 27),
        "{{ADD_SKILLS}}" => get_csv_cell($matriz, $Print_fila, 28),
        "{{ADD_SKILL1}}" => get_csv_cell($matriz, $Print_fila, 29),
        "{{ADD_SKILL2}}" => get_csv_cell($matriz, $Print_fila, 30),
        "{{ADD_SKILL3}}" => get_csv_cell($matriz, $Print_fila, 31),
        "{{ADD_SKILL4}}" => get_csv_cell($matriz, $Print_fila, 32),
    );

// Cargar la plantilla y renderizarla    
$template = load_template("new-email.html");
$html_renderizado = render_template($template, $datos);

echo $html_renderizado;
?>