<?php
require_once('app/HelloWorld.php');
require_once('app/Enigma.php');
//var_dump($_POST);
$enigmaInstance = new Enigma();
$result = "";

// this if statement check if the $_POST["plainText"],$_POST ["keyEncryption"] 
//from user is setted, and then it call function encrytion.
if(isset($_POST["plainText"]) && isset($_POST ["keyEncryption"]))
{
    $result = $enigmaInstance->encryption($_POST["plainText"],$_POST ["keyEncryption"]);
}


// this if statement check if the $_POST['cipherText']) && isset($_POST['keyDecryption']) 
//from user is setted, and then it call function decryption.
if(isset($_POST['cipherText']) && isset($_POST['keyDecryption']))
{
    $result = $enigmaInstance->decryption($_POST['cipherText'],$_POST['keyDecryption']);
}
?>
<html>

<h1>CRYPTO SYSTEM</h1>
<hr>

<form target="_self" method="post">
  please input your Plaintext:
  <textarea name="plainText"></textarea>
  <br>
  please type your key : <input type="password" name="keyEncryption">
  <br>
  <button type="submit">encrypt</button>

</form>


<hr>
<!--
 following line is similar to echo    
!-->
<?=HelloWorld::sayHello()?>
<hr>
<form target="_self" method="post">
  <h3>please input your Ciphertext:</h3>
  <textarea name="cipherText"></textarea>
  <br>
  please type your decryption key : <input type="password" name="keyDecryption">
  <br>
  <button type="submit">decryption</button>

</form>

<hr>
<h3>Result</h3>
<p>
  <?php
  echo $result;
  ?>
</p>

</html>