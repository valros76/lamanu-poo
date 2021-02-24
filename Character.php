<?php
/**
 * Exercice 1 :
 * Créer une classe character. Faire deux attributs : health et mana. Ils sont tous deux de type INT.
 * Exercice 2 :
 * Créer les deux méthodes magiques construct et destruct dans la classe character.
 */
class Character{
   protected $_health;
   protected $_mana;

   public function __construct($health, $mana){
      $this->_health = $health;
      $this->_mana = $mana;
   }

   public function __destruct(){
      $this->_health = null;
      $this->_mana = null;
   }
}