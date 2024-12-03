<?php

class Enigma
{
  /**
   * followinf Algorythem you can use and test how diffferent is the answer:
   *  AES-128-CBC
   *  aria256
   *  aria-256-cbc
   *  aes256
   *  Bestimmt Result bei Jeder Encryption algorythem ist anders!!!
   *  einfach testen. 
   * Note : Warning: openssl_encrypt(): Using an empty Initialization Vector (iv) is potentially insecure and not recommended in C:\xampp\htdocs\crypto\app\Enigma.php on line 21
   *  bedeutet dass sollen wir iv nicht leer lassen. 
   *  aber das gehört nicht zum unserem thema. Sie können einfach dafür Recherchrn. einfach, iv ist ein Peseudo Code 
   *  dass machet unsere Encryption viel sicherern. 
   */
  
  //Type declation : string after privte means our $ciferAlgo is from type string. it is very good allways define our variable type.
  //so we shall allways say for example : public int $myNumber;  means variable $myNumber is from type integer. very good pratice to keep.
  private string $ciferAlgo = "AES-128-CBC";

  public function __construct()
  {
    
  }

  public function encryption(string $plainText , string $userSecret)
  {
    return  openssl_encrypt($plainText, $this->ciferAlgo,$userSecret);
  }


  public function decryption(string $cipherText , string $userSecret)
  {
    return openssl_decrypt ($cipherText,$this->ciferAlgo,$userSecret);
  }

}