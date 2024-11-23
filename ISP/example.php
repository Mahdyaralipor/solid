<?php

    interface CanFly {
        public function fly();
    }

    interface CanSwim {
        public function swim();
    }

    class Dog implements CanSwim {
        public function swim() {
            echo "I can swim!\n";
        }
    }

    class Bird implements CanFly {
        public function fly() {
            echo "I can fly!\n";
        }
    }

    class Duck implements CanFly, CanSwim {
        public function fly() {
            echo "I can fly and swim!\n";
        }

        public function swim() {
            echo "I can swim!\n";
        }
    }

    $dog = new Dog();
    $dog->swim();

    $bird = new Bird();
    $bird->fly();

    $duck = new Duck();
    $duck->fly();
    $duck->swim();
