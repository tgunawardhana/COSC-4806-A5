<?php

class Report {

  public function __construct() {

  }

  public function get_all_reminders() {
    $dbh = db_connect();
    $statement = $dbh->prepare("select * from reminders;");
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
  }

  public function get_max_reminders() {
      $dbh = db_connect();
      $statement = $dbh->prepare("select user_name from users where id = (select user_id from reminders group by user_id order by count(*) desc limit 1);");
      $statement->execute();
      $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
      return $rows;
  }

  public function get_all_logins(){
      $dbh = db_connect();
      $statement = $dbh->prepare("select * from login_attempts group by username;");
      $statement->execute();
      $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
  }



}