<?php
//
 // This class create a secure hash for a password using salt
 //
class Pass_crypt{
 public function create_hash($vlue){
        //
  // this convert the original value to an encripted hash phrase
  // and return it.
  //
 // return password_hash(hash('sha256', $vlue, true), PASSWORD_DEFAULT);

  return password_hash(hash('sha256', $vlue, true), PASSWORD_DEFAULT);
 }
 public function check_value($vlue, $oldVlue){
 //
  // With this we verify if the value is equal the the hash value that we sent
  //
  $res = password_verify(hash('sha256', $vlue , true), $oldVlue);
  return $res;
 }


 
}
?>
