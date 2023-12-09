<?php

class Buffalo implements AnimalKingdomInterface
{

    public function voice()
    {
        return "Un buffle beugle";
    }

    public function eat()
    {
        return "Un buffle est herbivore";
    }
}