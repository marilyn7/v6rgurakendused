<?php require_once('head.html');?>

<div id="wrap">
	<h3>Valik</h3>
<?php
    if ($_POST['pilt']<0) 
        exit ("Valik tegemata!");
    
    $pildid = array("nameless1.jpg","nameless2.jpg","nameless3.jpg","nameless4.jpg","nameless5.jpg","nameless6.jpg",);
    $arv = count($pildid);
    
    if
        (isset($_POST["pilt"]) && $_POST["pilt"] <= $arv && is_numeric($_POST["pilt"])) $arv = $_POST["pilt"]; //viide: https://github.com/madisvorklaev/vrakendused1/blob/master/9_mvc/multipage/tulemus.php
    else 
        exit('Pilte pole nii palju!');
    
    if(isset($_POST["pilt"])) 
        $number = $_POST["pilt"]+1;
        echo 'Valitud pilt nr '.$number.' : '.$pildid[$arv];
?>
</div>
<?php require_once('foot.html');?>