<?php

class Pinto {
    public $mole;
    public $duro;
    public $punhetinhaDeixou = "duro";

    public function status() {
        return $this->punhetinhaDeixou;
    }
}

$pinto = new Pinto();
$pinto->mole = "6cm";
$pinto->duro = "2.5cm";
$status = $pinto->status();

echo ($pinto->status() == "duro") ? 
        "'Amor, ta doendo?' - Weverton, ".$pinto->$status : 
        "'Kappa do Kappa Pingolinha do Muca' - Matheus, ".$pinto->$status;

echo "<br>";

 if ($pinto->status() == "duro") {
    echo "'Amor, ta doendo?' - Weverton, ".$pinto->$status;
 } else {
    echo "Kappa do Kappa Pingolinha do Muca";
 }
echo "<br>";
 $pintinho = "penis";
 $penis = "pintinho";
 echo $$penis;
 ?>
