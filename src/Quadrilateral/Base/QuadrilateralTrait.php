<?php

namespace Quadrilateral\Base;

trait QuadrilateralTrait
{
  /**
   *
   */
  public function getFigureName()
  {
    $text = "Quadrilateral:";
    echo "$text\n" . $this->getName();
  }

  /**
   * @return string
   */
  abstract public function getName();
}
