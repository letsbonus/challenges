<?php

class LBChallenge_Utils {
   
   /*************************************************************
    * Log the data to a txt file
    */
   public function Log($string) {
      
      // LOG_PATH is defined in 'defines.php'
      if(($fd = fopen(LOG_PATH."\\log.txt", "a+")) != NULL) {
         fwrite($fd, $string);
         fclose($fd);
      }
   }
}

