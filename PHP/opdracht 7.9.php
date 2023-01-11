
<form action="">
<input type="text" name="tekstveld" placeholder="voer een tekst in."> <br>
<input type="radio" name="Letters" placeholder="Hoofdletters"> In Hoofdletters <br>
<input type="radio" name="Letters" placeholder="Kleine letters"> In Kleine letters <br>
<input type="radio" name="Letters" placeholder="EersteHoofdLetters"> In EersteHoofdletters <br>
<input type="radio" name="Letters" placeholder="ElkWoordHoofdLetter"> In Elk woord Hoofdletters <br>
<input type="submit" value="verzenden"><br>
</form>

<?php
if(isset($_GET['letters'])) {
    if($_GET['letters'] == 'Hoofdletters') {
        echo strtoupper($_GET['tekstveld']);
    } else if($_GET['letters'] == 'KleineLetters') {
        echo strtolower($_GET['tekstveld']);
    } else if($_GET['letters'] == 'EersteHoofdLetters') {
        echo ucfirst($_GET['tekstveld']);
    } else if($_GET['letters'] == 'ElkWoordHoofdLetters') {
        echo ucwords($_GET['tekstveld']);
    }
 }