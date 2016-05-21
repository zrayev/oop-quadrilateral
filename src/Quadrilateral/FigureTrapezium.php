<?php

namespace Quadrilateral;

final class FigureTrapezium implements Quadrilateral
{
  use QuadrilateralTrait;
  
  protected $name;

  /**
   * FigureTrapezium constructor.
   * @param string $name
   */
  public function __construct($name = "Trapezium")
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
