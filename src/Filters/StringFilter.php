<?php

namespace Filters;

class StringFilter
{
  public static function validate($input) {
    return is_string($input);
  }
}
