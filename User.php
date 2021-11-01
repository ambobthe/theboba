<?php

declare(strict_types = 1);

class User
{
  public function greeting(): void
  {
    echo("Greeting.");
  }
}

$newUser = new User();
$newUser->greeting();

 ?>
