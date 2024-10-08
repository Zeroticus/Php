<?php

class Potion {
    private $ingredients = [];

        //Constructor
    public function __construct($startIngredients = []) {
        foreach ($startIngredients as $ingredient) {
            $this->addIngredient($ingredient);
        }
    }
    

    // ingredient adding
    public function addIngredient(Ingredient $ingredient) {
        $ingredientNaam = $ingredient->rNaam();

        if (isset($this->ingredients[$ingredientNaam])) {
            $this->ingredients[$ingredientNaam]->addHoeveelheid($ingredient->rHoeveelheid());
        } else {
            $this->ingredients[$ingredientNaam] = $ingredient;
        }
    }


    //Display
    public function displayIngredients() {
        if (empty($this->ingredients)) {
            echo "Geen ingredienten in potion.";
            }  else {
            echo "Potion Ingredienten:\n";
            foreach ($this->ingredients as $ingredient) {
                echo "Ingredient:\n";
                echo  "Naam: " . $ingredient->rNaam() . ", Kleur: " . $ingredient->rKleur() . ", Hoeveelheid: " . $ingredient->rHoeveelheid() . "\n";
            
            }
        }
    }
}

//Z




