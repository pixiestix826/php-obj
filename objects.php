<?php
// Create Toon as the base class
interface Toon {
    // Define method(s) used by classes who will be implementing the interface
    public function getName();
    public function getRace();
    public function getSkillz();
    public function playToon();
}

 abstract class Hunter implements Toon {
    private $name;
    private $race;
    private $skillz;
    public function __construct($name, $race, $skillz) {
        $this->name = $name;
        $this->race = $race;
        $this->skillz = $skillz;
    }
    public function getSkillz() {
        $toon->getName().", the ".$toon->getRace().", will pierce your heart with her ".$toon->getSkillz();
    }
}

abstract class Mage implements Toon {
    private $name;
    private $race;
    private $skillz;
    public function __construct($name, $race, $skillz) {
        $this->name = $name;
        $this->race = $race;
        $this->skillz = $skillz;
    }
    public function getSkillz() {
        $toon->getName().", the ".$toon->getRace().", will decimate you with her ".$toon->getSkillz();
    }
}
abstract class Paladin implements Toon {
    private $name;
    private $race;
    private $skillz;
    public function __construct($name, $race, $skillz) {
        $this->name = $name;
        $this->race = $race;
        $this->skillz = $skillz;
    }
    public function getSkillz() {
        $toon->getName().", the ".$toon->getRace().", will protect you with her ".$toon->getSkillz();
    }
}

class Player
{
    public function playToon(Toon $toon)
    {
        return $toon->__construct();
    }
}

echo playToon(new Hunter(Antigone, NightElf, BlackArrow)) . "<br/>";
echo playToon(new Mage(Meg, Human, ArcaneBlast)) . "<br/>";
echo playToon(new Paladin(Isis, BloodElf, HolyShield));

 ?>
