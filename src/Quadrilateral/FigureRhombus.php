<?php

namespace Quadrilateral;

final class FigureRhombus implements Quadrilateral
{
  use QuadrilateralTrait;
  
  protected $name;

  /**
   * FigureRhombus constructor.
   * @param string $name
   */
  public function __construct($name = "Rhombus")
  {
    $this->name = $name;
    $this->getFigureName();
  }

  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
}
