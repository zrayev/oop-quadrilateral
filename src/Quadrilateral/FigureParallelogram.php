<?php

namespace Quadrilateral;

final class FigureParallelogram implements Quadrilateral
{
  protected $name;

  use QuadrilateralTrait;

  /**
   * FigureParallelogram constructor.
   * @param string $name
   */
  public function __construct($name = "Parallelogram")
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