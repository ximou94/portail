<?php
/**
 * j
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
    return $name = $this->_issues->{'issues'}[$number]->{'name'};
  }

  public function getUrl()
  {
    return $name = $this->_issues->{'isuues'}->{'url'};
  }
}
 ?>
