<?php

interface Shape {
    public function draw();
}

class BMW implements Shape{
    public function draw(){
        echo 'BMW';
    }
}

class Benz implements Shape {
    public function draw(){
        echo 'Benz';
    }
}

class Draw {
    public function drawAll($shapes){
        for ($i = 0; $i < count($shapes); $i++ )
            $shapes[$i]->draw();
        
    }
}

$Draw = new Draw();
$BMW = new BMW();
$Benz = new Benz();
$shapes = array($BMW, $Benz);
$Draw->drawAll($shapes);