<?php
/**
 * Exercice 1 :
 * Créer une classe character. Faire deux attributs : health et mana. Ils sont tous deux de type INT.
 * 
 * Exercice 2 :
 * Créer les deux méthodes magiques construct et destruct dans la classe character.
 * 
 * Exercice 3 :
 * Créer la méthode chat qui prend en paramètre une variable charac de type STRING dans la classe character. Cette méthode renvoie un STRING.
 * 
 * Exercice 4 :
 * Créer une classe orc qui hérite de la classe character. Faire un attribut health de type INT qui prend la valeur 1000.
 * 
 * Exercice 5 :
 * Faire dans la classe orc deux méthodes de type BOOLEAN useHammer et useSword.
 * 
 * Exercice 6 :
 * Créer une classe stuff. Faire les attributs suivants qui sont tous de type string :
 * - head
 * - body
 * - weapon
 * Faire dans les méthodes suivantes :
 * - construct
 * - view de type STRING
 * - destruct
 * 
 * Exercice 7 :
 * Ajouter dans la classe character un attribut stuff de type STUFF.
 */
class Stuff{
   protected string $_head;
   protected string $_body;
   protected string $_weapon;

   public function __construct(string $head,string $body, string $weapon){
      $this->_head = $head;
      $this->_body = $body;
      $this->_weapon = $weapon;
   }

   public function __destruct(){
      $this->_head = null;
      $this->_body = null;
      $this->_weapon = null;
   }

   public function view(string $param) : string{
      return $param;
   }

}
class Character extends Stuff{
   protected int $_health;
   protected $_mana;

   public function __construct($health, $mana){
      $this->_health = $health;
      $this->_mana = $mana;
   }

   public function __destruct(){
      $this->_health = null;
      $this->_mana = null;
   }

   public function chat(string $charac) : string{
      return 'Hello '.$charac;
   }
}

class Orc extends Character{
   protected int $_health = 1000;

   public function useHammer() : bool{
      return true;
   }

   public function useSword() : bool{
      return false;
   }
}