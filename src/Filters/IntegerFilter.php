<?php

namespace Filters;

class IntegerFilter
{
  public static function validate($input) {
    return is_int($input);
  }
}
