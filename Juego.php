 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Juego</title>
 </head>
 <body>

 <?php
 if(isset($_post['juego'])){

 
 $dado1=rand(0,9);
 $dado2=rand(0,9);
 $dado3=rand(0,9);
 $creditos = $_post['creditos'];
 $creditos -= 10;
 $numeroscinco = 0;
 if($dado1 === 5){
     $numeroscinco++;
 }
 if($dado2 === 5){
    $numeroscinco++;
}
if($dado3 === 5){
    $numeroscinco++;
}
if($numeroscinco === 1){
$creditos += 5;
}else if($numeroscinco === 2){
$creditos += 25;

}else if($numeroscinco === 3){
    $creditos += 100;
    
}
 
 }else{
     $creditos = 100;
 }
 ?>
 <?php
 if($creditos < 10){
      ?>
      <h1>no puedes seguir combrar creditos</h1>
      <?php
 }else {
     ?>
     
     <h1>tus<?php echo $creditos;?>creditos</h1>
     <form method="post">
         <input type="hidden" name="creditos"value="<?php echo $creditos;?>">
         <input type="text"  value="<?php if(isset($dado1)) { echo $dado1; }?>"/>
         <input type="text"  value="<?php if(isset($dado2)) { echo $dado2; }?>"/>
         <input type="text"  value="<?php if(isset($dado3)) { echo $dado3; }?>"/>
         <input type="submit" name="Juego"value="jugar">
     </form>
     <?php 
 }
 ?>
 </body>
 </html>