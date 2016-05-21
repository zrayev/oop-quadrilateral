<?php

namespace Quadrilateral;

final class FigureRectangle
{
  use QuadrilateralTrait;
  
  protected $name;

  /**
   * FigureRectangle constructor.
   * @param string $name
   */
  public function __construct($name = "Rectangle")
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
