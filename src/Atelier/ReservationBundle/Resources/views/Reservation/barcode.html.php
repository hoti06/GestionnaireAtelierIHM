<?php
foreach($reservation->getMaterials() as $material)
{
?>
Material ID = <?php echo $material->getId(); ?>
<img src="http://localhost/Symfony/web/img/barcode/buildBarcode.php?text=<?php echo $material->getUuid(); ?>">
<br />
<?php
}
?>

