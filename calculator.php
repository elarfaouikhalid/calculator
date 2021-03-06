<?php 
session_start();
$val1=($_POST['val1'] ?? "");
$val2=($_POST['val2'] ?? "");
$val3=($_POST['val3'] ?? "");
$val4=($_POST['val4'] ?? "");
$val5=($_POST['val5'] ?? "");
$val6=($_POST['val6'] ?? "");
$val7=($_POST['val7'] ?? "");
$val8=($_POST['val8'] ?? "");
$val9=($_POST['val9'] ?? "");
$val0=($_POST['val0'] ?? "");
$reste=($_POST['reste'] ?? "");
$moins=($_POST['moins'] ?? "");
$plus=($_POST['plus'] ?? "");
$multi=($_POST['multi'] ?? "");
$div=($_POST['div'] ?? "");
$resultat=($_POST['res'] ?? "0");
if(isset($_POST['val1']))
{
$resultat=$resultat."$val1";
}
if(isset($_POST['val2']))
{
$resultat=$resultat."$val2";
}
if(isset($_POST['val3']))
{
$resultat=$resultat."$val3";
}
if(isset($_POST['val4']))
{
$resultat=$resultat."$val4";
}
if(isset($_POST['val5']))
{

$resultat=$resultat."$val5";
}
if(isset($_POST['val6']))
{
$resultat=$resultat."$val6";
}
if(isset($_POST['val7']))
{
$resultat=$resultat."$val7";
}
if(isset($_POST['val8']))
{
$resultat=$resultat."$val8";
}
if(isset($_POST['val9']))
{

    $resultat=$resultat."$val9";
}
if(isset($_POST['plus']))
{
    $_SESSION["var"]="+";
    $_SESSION["res"]=intval($resultat);
    $resultat="";
$resultat=$resultat."$plus";
}
if(isset($_POST['moins']))
{
    $_SESSION["var"]="-";
    $_SESSION["res"]=intval($resultat);
    $resultat="";
$resultat=$resultat."$moins";
}
if(isset($_POST['multi']))
{
    $_SESSION["var"]="*";
    $_SESSION["res"]=intval($resultat);
    $resultat="";
$resultat=$resultat."$multi";
}
if(isset($_POST['div']))
{
    $_SESSION["var"]="/";
    $_SESSION["res"]=intval($resultat);
    $resultat="";
$resultat=$resultat."$div";
}
if(isset($_POST['reste']))
{
    $_SESSION["var"]="%";
    $_SESSION["res"]=intval($resultat);
    $resultat="";
$resultat=$resultat."$reste";
}
if(isset($_POST['clear']))
{
    $resultat=substr($_POST['res'],1,$_POST['res']);
}
if(isset($_POST['egal']))
{
    $_SESSION["res1"]=intval($resultat);
    if($_SESSION["var"]=="+")
    {
        $resultat=intval($_SESSION["res"])+intval($_SESSION["res1"]);
    }
    if($_SESSION["var"]=="-")
    {
        $resultat=intval($_SESSION["res"])-intval($_SESSION["res1"]);
    }
    if($_SESSION["var"]=="*")
    {
        $resultat=intval($_SESSION["res"])*intval($_SESSION["res1"]);
    }
    if($_SESSION["var"]=="/")
    {
        $resultat=intval($_SESSION["res"])/intval($_SESSION["res1"]);
    }
    if($_SESSION["var"]=="%")
    {
        $resultat=intval($_SESSION["res"])%intval($_SESSION["res1"]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<style>
.btn
{
    border-radius: 10px 10px 10px 10px;
    margin-top: 10px;
    width: 65px
}
.btn:hover
{
    background-color: red;
}
.form-control
{
    width: 210px;
}
.action
{
    box-shadow: 10px 10px 10px 10px ;
}
</style>
</head>
<body>
<form action="./calculator.php" method="POST">
<div class="action">
    <input class="form-control" value="<?php echo $resultat ?>" type="text" placeholder="enter numbre" name="res" ><br>
    <input class="btn btn-warning"  name="val8" type="submit" value="8">
    <input class="btn btn-warning" name="val9" type="submit" value="9">
    <input class="btn btn-warning" name="val7" type="submit" value="7"><br>
    <input class="btn btn-warning" name="val6" type="submit" value="6">
    <input class="btn btn-warning" name="val5" type="submit" value="5">
    <input class="btn btn-warning" name="val4" type="submit" value="4"><br>
    <input class="btn btn-warning" name="val3" type="submit" value="3">
    <input class="btn btn-warning" name="val2" type="submit" value="2">
    <input class="btn btn-warning" name="val1" type="submit" value="1"><br>
    <input class="btn btn-warning" name="plus" type="submit" value="+">
    <input class="btn btn-warning" name="moins" type="submit" value="-">
    <input class="btn btn-warning" name="div" type="submit" value="/"><br>
    <input class="btn btn-warning" name="val0" type="submit" value="0">
    <input class="btn btn-warning" name="clear" type="submit" value="C">
    <input class="btn btn-warning"  name="reste" type="submit" value="%"><br>
    <input class="btn btn-warning"  name="egal" type="submit" value="=">
    </form> 
    <div>
</body>
</html>