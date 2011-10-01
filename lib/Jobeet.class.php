<?php

/**
 * Jobeet
 **/
class Jobeet
{
  static public function slugify($text)
  {
    if (empty($text))
    {
      return 'n-a';
    }

    $text = preg_replace('/\W+/', '-', $text);
    $text = strtolower(trim($text, '-'));

    return $text;
  }
}
