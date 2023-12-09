<?php

class Lion implements AnimalKingdomInterface
{

    public function voice()
    {
        return "Un lion rugit";
    }

    public function eat()
    {
        return "Un lion est carnivore";
    }
}