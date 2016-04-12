<?php
/**
 * j
 */
class menuController
{
private $_json;
public $_magazines;

  public function __construct()
  {
    $this->_json = file_get_contents("C:\wamp\www\Portail-EDP-Sante\span-template\models\menu.json");
    $this->_magazines = json_decode($this->_json);
  }

  public function getNavlevel0()
  {
    return $name = $this->_magazines->{'navLinkLevel0'};
  }

  public function getNavLevel0Name($number)
  {
    return $name = $this->_magazines->{'navLinkLevel0'}[$number]->{'name'};
  }

  public function getNavLevel1($number)
  {
    return  $name = $this->_magazines->{'navLinkLevel0'}[$number]->{'navLinkLevel1'};
  }

  public function getNavLevel1Name($number,$number2)
  {
    return $name = $this->_magazines->{'navLinkLevel0'}[$number]->{'navLinkLevel1'}[$number2]->{'name'};
  }
}

?>
