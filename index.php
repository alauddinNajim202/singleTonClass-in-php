<?php

class SingletonClass{
	private static $connect=null;
	
	private  function __construct() {
        echo "Connect";
    }
	public static function showInformation() {
        if(self::$connect==null){
			self::$connect = new SingletonClass();
		}else{
			echo "Already Database connected";
		}
		
		return self::$connect;
    }
	
}
 $obj1 =  SingletonClass::showInformation();
 $obj2 =  SingletonClass::showInformation();
 


?>