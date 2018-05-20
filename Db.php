<?php

class Db {
  private static $instance;

  public static function getDbConnection() {
    if (self::$instance == null) {
      self::$instance = new PDO('mysql:host=localhost;dbname=collection', 'root', '');
    }
    return self::$instance;
  }
}