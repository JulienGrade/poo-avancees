<?php

class Bee implements AnimalKingdomInterface, InsectKingdomInterface
{

    public function voice()
    {
        return "Une abeille bourdonne";
    }

    public function eat()
    {
        return "Une abeille mange du pollen";
    }

    public function shellColor()
    {
        return "La carapace de l'abeille est noire";
    }
}

