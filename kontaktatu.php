<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="erronka.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Kontaktatu</title>
</head>

<body>
    <div class="osoa">

        <header>
        <?php require_once "header.php" ?>
        </header>

        <div>
            <div class="kontaktuinfo">
                <span class="fa fa-phone" style="font-size: 40px;"></span> <span class="kontaktuak">613587943</span>
                <br><br><br>
                <i class="material-icons" style="font-size:36px">email</i> <span
                    class="kontaktuak">info@secondlife.com</span>
            </div>

            <div class="formularioa">
                <form action="DatuBasea.php" method="post">
                    <h1>Kontaktatu</h1> <br>

                    <label for="izena">Izena*</label>
                    <input type="text" name="izena" id="izena" required> <br> <br>
                    <label for="abizena">Abizena</label>
                    <input type="text" name="abizena" id="abizena"> <br> <br>
                    <label for="telefonoa">Telefonoa*</label>
                    <input type="tel" name="telefonoa" id="telefonoa" placeholder="+34 6xxxxxxx" required> <br> <br>
                    <label for="emaila">Emaila*</label>
                    <input type="email" name="emaila" id="emaila" pattern=".+@.+\..+" required> <br> <br>

                    <label for="informazioajaso"><strong> Nola jaso nahi duzu informazioa?*</strong></label> <br> <br>

                    <input type="radio" name="informazioajaso" id="telefonozjaso" checked value="Telefono bidez">
                    <label for="informazioajaso">Telefono bidez</label> <br>

                    <input type="radio" name="informazioajaso" id="emailezjaso" value="Email bidez">
                    <label for="informazioajaso">Email bidez</label> <br> <br>

                    <label for="errorea">Akats mota*</label>
                    <select id="arazoa" name="arazoa">
                        <option disabled selected>Arazoa</option>
                        <option value="Gailua bueltatu nahi dut">Gailua bueltatu nahi dut</option>
                        <option value="Arazo bat konpondu nahi du">Arazo bat konpondu nahi du</option>
                        <option value="Beste arazo bat">Beste arazo bat</option>
                    </select> <br> <br>

                    <label for="explikazioa">Esplikatu zure arazoa</label> <br>
                    <textarea type="textarea" name="explikazioa" id="explikazioa" class="explikaziokaxa"></textarea>
                    <br>
                    <br>
                    <div class="kontaktatubotoiak">
                        <input type="submit" name="bidali" value="Bidali" class="bidalibotoia">
                        <input type="reset" value="Garbitu" class="ezabatubotoia">
                    </div>
                </form>
            </div>
        </div>

        <footer>
            <?php require_once "footer.php" ?>
        </footer>

    </div>

</body>

</html>
