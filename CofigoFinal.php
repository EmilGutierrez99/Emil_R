<?php
global $N;  // Variable global para seleccionar el numero de fila a mostrar
$N = 1; //entrada de la fila a mostrar


class Load_csv {
    private $filas = 3;
    private $columnas = 34;
    private $matriz = array();

    public function __construct($filename) {
        if (($archivo = fopen($filename, "r")) !== FALSE) {
            for ($i = 0; $i < $this->filas; $i++) {
                $linea = fgets($archivo);
                $datos_fila = explode(",", $linea);
                for ($j = 0; $j < $this->columnas; $j++) {
                    $this->matriz[$i][$j] = isset($datos_fila[$j]) ? $datos_fila[$j] : "";
                }
            }
            fclose($archivo);
        }
    }

    public function getCell($fila, $columna) {
        return $this->matriz[$fila][$columna];
    }
}
// Uso de la clase
$csvLoader = new Load_csv("Datos_w.csv");
//echo $csvLoader->getCell(2, 0);


class Load_Template {
    private $template;

    public function __construct($filename) {
        $this->template = file_get_contents($filename);
    }

    public function render($data) {
        return str_replace(array_keys($data), array_values($data), $this->template);
    }
}


$datos = array(
    "{{NAME}}" => $csvLoader->getCell($N, 0),
    "{{OCCUPATION}}" => $csvLoader->getCell($N, 1),
    "{{PHOTO}}" => $csvLoader->getCell($N, 2),
    "{{ME}}" => $csvLoader->getCell($N, 3),
    "{{CONT_ME}}" => $csvLoader->getCell($N, 4),
    "{{CONTACT}}" => $csvLoader->getCell($N, 5),
    "{{PHONE}}" => $csvLoader->getCell($N, 6),
    "{{ADDRESS}}" => $csvLoader->getCell($N, 7),
    "{{EMAIL}}" => $csvLoader->getCell($N, 8),
    "{{EXPERIENCE}}" => $csvLoader->getCell($N, 9),
    "{{TIME_EXP1}}" => $csvLoader->getCell($N, 10),
    "{{EXP1_TITLE}}" => $csvLoader->getCell($N, 11),
    "{{EXP1_DESC}}" => $csvLoader->getCell($N, 12),
    "{{TIME_EXP2}}" => $csvLoader->getCell($N, 13),
    "{{EXP2_TITLE}}" => $csvLoader->getCell($N, 14),
    "{{EXP2_DESC}}" => $csvLoader->getCell($N, 15),
    "{{EDUCATION}}" => $csvLoader->getCell($N, 16),
    "{{TIME_EDU1}}" => $csvLoader->getCell($N, 17),
    "{{EDU1_TITLE}}" => $csvLoader->getCell($N, 18),
    "{{EDU1_DESC}}" => $csvLoader->getCell($N, 19),
    "{{TIME_EDU2}}" => $csvLoader->getCell($N, 20),
    "{{EDU2_TITLE}}" => $csvLoader->getCell($N, 21),
    "{{EDU2_DESC}}" => $csvLoader->getCell($N, 22),
    "{{SKILLS}}" => $csvLoader->getCell($N, 23),
    "{{SKILL1}}" => $csvLoader->getCell($N, 24),
    "{{SKILL2}}" => $csvLoader->getCell($N, 25),
    "{{SKILL3}}" => $csvLoader->getCell($N, 26),
    "{{SKILL4}}" => $csvLoader->getCell($N, 27),
    "{{ADD_SKILLS}}" => $csvLoader->getCell($N, 28),
    "{{ADD_SKILL1}}" => $csvLoader->getCell($N, 29),
    "{{ADD_SKILL2}}" => $csvLoader->getCell($N, 30),
    "{{ADD_SKILL3}}" => $csvLoader->getCell($N, 31),
    "{{ADD_SKILL4}}" => $csvLoader->getCell($N, 32),
    
);



// Uso de la clase
$csvLoader = new Load_csv("Datos_w.csv");
//echo $csvLoader->getCell(2, 0);

// Uso de la clase
$template = new Load_Template("new-email.html");
$html_renderizado = $template->render($datos);

echo $html_renderizado;


?>
