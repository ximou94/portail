<?php
/**
 *
 */
class magazinesController
{

public $_json;
public $_issues;

  public function __construct()
  {
    $this->_json = file_get_contents(ROOT.DS."models".DS."magazines.json");
    $this->_issues = json_decode($this->_json);
  }
public function getAll()
{
    var_dump($name = $this->_issues);
}
  public function getName($number)
  {
    return $name = $this->_issues->{'poles'}[$number]->{'name'};
  }

  public function getUrl()
  {
    return $name = $this->_issues->{'isuues'}->{'url'};
  }

  public function getAllPoles(){
    return $name = $this->_issues->{'poles'};
  }

  public function getAllMagazines()
  {
    return $name = $this->_issues->{'poles'}[''];
  }
  public function getNavlevel0()
  {
    return $name = $this->_issues->{'poles'};
  }

  public function getNavLevel0Name($number)
  {
    return $name = $this->_issues->{'poles'}[$number]->{'name'};
  }

  public function getNavLevel1($number)
  {
    return  $name = $this->_issues->{'poles'}[$number]->{'magazines'};
  }
  public function getNavLevel1Name($number,$number2)
  {
    return $name = $this->_issues->{'poles'}[$number]->{'magazines'}[$number2]->{'name'};
  }

  public function getNavLevel1Link($number,$number2)
  {
    return $name = $this->_issues->{'poles'}[$number]->{'magazines'}[$number2]->{'link'};
  }

  public function getMagazineInfos($pole,$magazine){
    return $name = $this->_issues->{'poles'}[$pole]->{'magazines'}[$magazine];
  }
  public function getOnePole($pole)
  {
    return $name = $this->_issues->{'poles'}[$pole];
  }

}
 ?>
