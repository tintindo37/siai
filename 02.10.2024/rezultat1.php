<?php
$dzis = new DateTime();
$wydarzenie = new DateTime(’2025-12-31 20:30’);
$odliczanie = $dzis->diff($wydarzenie);
$przedsprzedaz = new DateTime();
$interwal = new DateInterval(’P1M’);
$przedsprzedaz->add($interwal);
?>
<?php include ’dolaczane/naglowek.php’; ?>
<p><b>Odliczanie do wydarzenia:</b><br>
 <?= $odliczanie->format(’%y (lata) %m (miesiące) %d
(dni)’) ?>
</p>
<p><b>50-procentowa zniżka obowiązuje do:</b><br>
 <?= $przedsprzedaz->format(’d-m-Y, g:i’) ?>
</p>
<?php include 'dolaczane/stopka.php'; ?>
