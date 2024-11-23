<?php
    class Bird {
        public function eat() {
            echo "Eating...\n";
        }
    }

    class FlyingBird extends Bird {
        public function fly() {
            echo "Flying...\n";
        }
    }

    class NonFlyingBird extends Bird {
    }

    function testBird(Bird $bird) {
        $bird->eat();
        
        if ($bird instanceof FlyingBird) {
            $bird->fly();
        }
    }

    $eagle = new FlyingBird();
    $eagle->eat();
    $eagle->fly();

    $penguin = new NonFlyingBird();
    $penguin->eat();

    testBird($eagle); 
    testBird($penguin);
