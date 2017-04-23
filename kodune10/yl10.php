<?php
$text_bg="#fff";
if (isset($_POST['bg'])) 
    $text_bg = htmlspecialchars($_POST['bg']); 
$text_color="#fff";
if (isset($_POST['tc'])) 
    $text_color = htmlspecialchars($_POST['tc']); 
$border_width =2;
if (isset($_POST['bw']) ) 
    $border_width = htmlspecialchars($_POST['bw']); 
$border_style =" solid ";
if (isset($_POST['bs']) ) 
    $border_style = htmlspecialchars($_POST['bs']); 
$border_color =" black ";
if (isset($_POST['bc']) ) 
    $border_color = htmlspecialchars($_POST['bc']); 
$border=$border_color." ".$border_style." ".$border_width; 
$border_radius =10;
if (isset($_POST['br']) ) 
    $border_radius = htmlspecialchars($_POST['br']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Praktikum  - ülesanne</title>

    <style type="text/css">
        #text { background: <?php echo $text_bg; ?>;
            color: <?php echo $text_color; ?>;
            border:  <?php echo $border; ?>px;
            border-radius: <?php echo $border_radius; ?>px;
            padding:10px;
            min-height:100px;
            max-width: 400px;
        }
    </style>

</head>
<body>

    <?php 
    $stiilid=array("solid", "dashed", "dotted", "none", "double");
    ?>

    <div id="text"> <?php if (isset($_POST['text'])) echo htmlspecialchars($_POST['text']); ?></div>

    <hr/>
    <form method="POST" action="yl10_1.php">
        <textarea name="text" placeholder="comment"><?php if(isset($_POST['text'])) echo htmlspecialchars($_POST['text']); ?></textarea>
        <br/>
        <input type="color" name="bg" id="bg" value="<?php if(isset($_POST['bg'])) echo htmlspecialchars($_POST['bg']); ?>"> 
        <label for="bg">Background</label>
        <br/>
        <input type="color" name="tc" id="tc" value="<?php if(isset($_POST['tc'])) echo htmlspecialchars($_POST['tc']); ?>"> 
        <label for="tc">Text</label>
        <br/>
        <fieldset>
            <legend>Border</legend>
            <input type="number" min="0" max="20" step="1" name="bw" id="bw" value="<?php if(isset($_POST['bw'])) echo htmlspecialchars($_POST['bw']); ?>">
            <label>Border width (0-20)</label>
            <br/>
            <select name="bs">
                <?php foreach($stiilid as $stiil):?>
                    <option <?php if(isset($_POST["bs"]) && $_POST["bs"] == $stiil) echo "selected";?>> <?php  echo $stiil; ?></option>
                <?php endforeach; ?>
            </select>
            <br/>
            <input type="color" name="bc" id="bc" value="<?php if(isset($_POST['bc'])) echo htmlspecialchars($_POST['bc']); ?>"> 
            <label for="bc">Border color</label>
            <br/>
            <input type="number" min="0" max="100" step="1" name="br" id="br" value="<?php if(isset($_POST['br'])) echo htmlspecialchars($_POST['br']); ?>">
            <label>Border corner radius (0-100px)</label>
            <br/>
        </fieldset>
        <input type="submit" value="Submit" />
    </form>

</body>
</html>