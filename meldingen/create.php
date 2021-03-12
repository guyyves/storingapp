<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen / Nieuw</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>

    <div class="container">
        <h1>Nieuwe melding</h1>

        <form action="../backend/meldingenController.php" method="POST">
        
            <div class="form-group">
                <label for="attractie">Naam attractie:</label>
                <input type="text" name="attractie" id="attractie" class="form-input">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select name="type" id="tye">
                <option value=" ">- Kies een type -</option>
                <option value="achtbaan">Achtbaan</option>
                <option value="draaiend">Draaiende attracties</option>
                <option value="kinder">kinder acttraties</option>
                <option value="horeca">Horeca</option>
                <option value="show">Shows</option>
                <option value="water">Water acttracties</option>
                <option value="overig">Overige acttracties</option>
                </select>
            </div>
            <div class="form-group">
                <label for="capaciteit">Capaciteit p/uur:</label>
                <input type="number" min="0" name="capaciteit" id="capaciteit" class="form-input">
            </div>
            <div class="form-group">
                <label for="prioriteit"></label>
            </div>
            <div class="form-group">
                <label for="melder">Naam melder:</label>
                <input type="text" name="melder" id="melder" class="form-input">
            </div>
            <div class="form-group">
                <label for="group" id="group">Klas</label>
                <select name="group" id="group">
                    <option value=" ">- Kies je klas -</option>
                    <option value="A">RIO4-AMO1A</option>
                    <option value="B">RIO4-AMO1B</option>
                    <option value="C">RIO4-AMO1C</option>
                </select>
            </div>
            <div class="form-group">
                <label for="newsletter">Nieuwsbrief:</label>
                <input type="checkbox" name="newsletter" id="newsletter">
                <label for="newsletter">Ik wil graag de Nieuwsbrief ontvangen</label>
            </div>

            <input type="submit" value="Verstuur melding">

        </form>
    </div>  

</body>

</html>
