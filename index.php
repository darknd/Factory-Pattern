<?php

include_once 'nintendo.php';

$nes = Nintendo::create('nes', 8);
echo $nes->getType() . ": tiene " . $nes->bits . " bits" . "<br>";

$snes = Nintendo::create('snes', 16);
echo $snes->getType() . ": tiene " . $snes->bits . " bits" . "<br>";