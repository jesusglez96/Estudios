<?php 
class Romano {
    private const AR_ROMANOS = ["M" => 1000, "D" => 500, "C" => 100, "L" => 50, "X" => 10, "I" => 1];
    
    public static function calcularValor($strRomano){
        $valor = 0;

        $arStrRomano = str_split($strRomano);

        $correcto = true;
        foreach ($arStrRomano as $key => $lt) {
           if (array_key_exists($lt, Romano::AR_ROMANOS)) $valor += Romano::AR_ROMANOS[$lt];
           else $correcto = false;
        }
        echo ($correcto) ? "<h3>El valor decimal es: " . $valor . "</h3>" : "<p>Valor no válido</p>";
    }
}
?>