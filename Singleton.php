<?php 
// Singleton 
class User 
{
  // To hold an instance of the class 
  private static $instance;

  // The singleton method
  public static function get_instance()
  {
    /*  
        If an instance of a class is not set/created,
        create an instance of a class ( instantiated is ) and 
        store that class in $instance
    */
    if ( ! isset(self::$instance) ) {
      self::$instance = new __CLASS__; 
    } 
    return self::$instance;
  }
}

$user1 = User::get_instance();
$user2 = User::get_instance();
$user3 = User::get_instance();

?>
