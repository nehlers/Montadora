<pre>    
<?php

namespace Montadora;

use Montadora\Motor\Motor1600;
use Montadora\Motor\MotorTurbo;

use Montadora\Volante\VolanteComum as Volante;

ini_set('display_errors', 1);/*mostra se há erro*/
error_reporting(E_ALL);/*Define quais erros serão reportados - exibir tudo*/

require_once './Carro.php';
/*require_once, requere 1 vez só, só vai ser chamado uma vez, evitar de usar o require (sozinho)*/

require_once './Carro.php';
require_once './Pickup.php';
require_once './Motor.php';
require_once './Motor1000.php';
require_once './Motor1600.php';
require_once './MotorTurbo.php';
require_once './VoltanteComum.php';

$motor1 = new \Montadora\Motor\Motor1000;
$motor2 = new Motor1600();
$motor3 = new MotorTurbo();

$volante = new Volante();

$carro1 = new Carro($motor3, $volante); /*instanciar - objeto criado*/

$carro1->abastecer(0);
try{
    $carro1->ligar();
    $carro1->acelerar(20);
} catch (Exception $e) {
    echo "\n".$e->getMessage()."\n";
}


    



//var_dump($carro1);
print_r($carro1);

?>
</pre>