<?php
 include "Classes/PotionClass.php";
 include "Classes/IngredientClass.php";

 



// Ingredienten maken
$eyeOfNewt = new Ingredient("Eye of Newt", "Groen", 3);
$redBerries = new Ingredient("Red Berries", "Rood", 2);

// Potion Maken
$potion1 = new Potion();

// Ingredient toevoegen
$potion1->addIngredient($eyeOfNewt);
$potion1->addIngredient($redBerries);
$potion1->addIngredient($redBerries);

// Hoeveelheid plussen
$potion1->addIngredient(new Ingredient("Eye of Newt", "green", 2));

// Aanroep
$potion1->displayIngredients();


//Z