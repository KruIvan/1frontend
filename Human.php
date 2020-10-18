<?php

class Human {
  public string   $name;
  public DateTime $created_at;
  public string   $nationality;
  public array    $pets = [];

  public function __construct (string $name, DateTime $created_at, string $nationality) {
    $this->name       = $name;
    $this->created_at = $created_at;
    $this->nationality = $nationality;
  }

  public function hasPet(string $name): bool {
    return in_array($name, $this->pets);
  }
}
