<h1 style="color:red">Lista Film</h1>


<?php

class Movie
{
    //attributi
    public $titolo;
    public $genere;
    public $anno_uscita;

    //costruttore
    public function __construct($titolo, $genere, $anno_uscita)
    {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->anno_uscita = $anno_uscita;
    }

    //metodo che calcola quanti anni sono passati dall'uscita del film
    public function getEta()
    {
        return 2021 - $this->anno_uscita;
    }
}

//instanza 1
$fantozzi = new Movie('Fantozzi', 'Comico', 1975);

?>
<h2><?php echo $fantozzi->titolo; ?></h2>
<h3><?php echo $fantozzi->genere; ?></h3>

<?php
echo '<p> E\' uscito ' . $fantozzi->getEta() . ' anni fa</p>';
?>
<hr>
<?php

//instanza 2
$cast_away = new Movie('Cast Away', 'Drammatico', 2001);
?>
<h2><?php echo $cast_away->titolo; ?></h2>
<h3><?php echo $cast_away->genere; ?></h3>

<?php
echo '<p> E\' uscito ' . $cast_away->getEta() . ' anni fa</p>';
?>

