<?php

namespace Quadrilateral;

use Quadrilateral\Base\Quadrilateral;
use Quadrilateral\Base\QuadrilateralTrait;

final class FigureRectangle implements Quadrilateral
{
  use QuadrilateralTrait;

  protected $name;

  /**
   * FigureRectangle constructor.
   * @param string $name
   */
  public function __construct($name = "Rectangle")
  {
    $this->setName($name);
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
