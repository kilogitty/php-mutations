<?php

namespace Filters;

class ArrayFilter
{
  public static function validate($input) {
    return is_array($input);
  }
}
