<?php
require_once "./assets/layout/header.php";
require_once "./assets/crypto/app/HelloWorld.php";
require_once "./assets/crypto/app/Enigma.php";

$enigmaInstance = new Enigma();
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["plainText"]) && isset($_POST["keyEncryption"])) {
        $result = $enigmaInstance->encryption(
            htmlspecialchars($_POST["plainText"]),
            htmlspecialchars($_POST["keyEncryption"])
        );
    } elseif (isset($_POST['cipherText']) && isset($_POST['keyDecryption'])) {
        $result = $enigmaInstance->decryption(
            htmlspecialchars($_POST['cipherText']),
            htmlspecialchars($_POST['keyDecryption'])
        );
    }
}
?>

<div class="container mt-4">

    <div class="container mt-4">
        <hr>
        <h1>Geheime Informationen</h1>
        <hr>
        <pre>
        <p>Vollständiger Name:  Andreas Dick</p>
        <p>Adresse:             Bartensteiner Weg 14</p>
        <p>Geburtsdatum:        13.01.1983</p>
        <p>Lieblingsfarbe:      Schwarz</p>
        </pre>
    </div>

    <hr>

    <h3>Wenn Sie die Informationen verschlüsseln wollen,</h3>
    <h3>benutzen Sie das Crypto System.</h3>

    <hr>

    <form method="post">
        <div class="mb-3">
            <label for="plainText" class="form-label text-light">Bitte geben Sie Ihren Klartext(Plain Text) ein:</label>
            <textarea class="form-control" id="plainText" name="plainText" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="keyEncryption" class="form-label text-light">Bitte geben Sie Ihren Schlüssel(Key) ein:</label>
            <input type="password" class="form-control" id="keyEncryption" name="keyEncryption">
        </div>
        <button type="submit" class="btn btn-primary">Verschlüsseln</button>
    </form>

    <hr>
    <hr>

    <form method="post">
        <div class="mb-3">
            <label for="cipherText" class="form-label text-light">Bitte geben Sie Ihren Geheimtext(Cipher Text)
                ein:</label>
            <textarea class="form-control" id="cipherText" name="cipherText" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="keyDecryption" class="form-label text-light">Bitte geben Sie Ihren
                Entschlüsselungsschlüssel(Key)
                ein:</label>
            <input type="password" class="form-control" id="keyDecryption" name="keyDecryption">
        </div>
        <button type="submit" class="btn btn-primary">Entschlüsseln</button>
    </form>

    <hr>

    <h3 class="text">Ergebnis:</h3>
    <p class="text"><?= htmlspecialchars($result) ?></p>
    <br>
    <hr>

</div>
</section>

<?php require_once "./assets/layout/footer.php"; ?>