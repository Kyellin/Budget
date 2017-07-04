
<html>

<head>
     <meta charset="utf-8"/>
    <title> Budget Mensuel Simple</title>
    <link rel="stylesheet" type="text/css" href="style2.css" />
</head> 
    
    
<body>  
    <h1>Budget Mensuel Simple</h1>
    
    <div class ="leftbox">
    
        <h2>Revenus mensuel</h2>
   
     <div class="header3">  
    <div class="left"> <h3>Élément</h3></div> 
    <div class="right"><h3> Montant</h3></div>
          </div> 
        
        
    <form name="formulaire" method="post" form action="index.php">
        
        
        <div class="left"> Revenu 1:</div> <input type="text" name="rev1" value="0"/>$<br>
    <br>
    
    
        <div class="left">Revenu 2:</div> <input type="text" name="rev2" value="0"/>$<br>
    <br>
    

    <div class="left">Autre:</div> <input type="text" name="rev3" value="0"/>$<br>
    <br>

<h2>Dépenses mensuelles</h2>



    <div class="left"> <h3>Élément</h3></div> 
    <div class="right"><h3> Montant</h3></div>


<div class="left">Loyer/Emprunt-logement:</div> <input type="text" name="mon1" value="0"/>$<br>
    <br>

    <div class="left">Électricité:</div> <input type="text" name="mon2" value="0"/>$<br>
    <br>

    <div class="left">Essence:</div> <input type="text" name="mon3" value="0"/>$<br>
    <br>

    <div class="left">Cellulaire:</div> <input type="text" name="mon4" value="0"/>$<br>
    <br>

   <div class="left"> Épicerie:</div><input type="text" name="mon5" value="0"/>$<br>
    <br>

   <div class="left">Essence:</div> <input type="text" name="mon6" value="0"/>$<br>
    <br>

     <div class="left">Traites voiture:</div> <input type="text" name="mon7" value="0"/>$<br>
    <br>

    <div class="left">Dépense auto:</div><input type="text" name="mon8" value="0"/>$<br>
    <br>

    <div class="left">Assurance auto:</div> <input type="text" name="mon9" value="0"/>$<br>
    <br>

    <div class="left">Préts étudiants:</div> <input type="text" name="mon10" value="0"/>$<br>
    <br>

    <div class="left">Carte bancaires:</div> <input type="text" name="mon11" value="0"/>$<br>
    <br>

   <div class="left">Soin personnels:</div> <input type="text" name="mon12" value="0"/>$<br>
    <br>
 
     <div class="left">Divertissement:</div> <input type="text" name="mon13" value="0"/>$<br>
    <br>

    <div class="left">Divers:</div> <input type="text" name="mon14" value="0"/>$<br>
    <br>  

    <input type="submit" name="valider" value="Calculer"/>
    

    </form> 
</div>

<div class="rightbox">
  <?php
if(isset($_POST[ 'valider' ] )){
 $rev1=$_POST[ 'rev1' ] ;
 $rev2=$_POST[ 'rev2' ] ;
 $rev3=$_POST[ 'rev3' ] ;
 $mon1=$_POST[ 'mon1' ] ;
 $mon2=$_POST[ 'mon2' ] ;   
 $mon3=$_POST[ 'mon3' ] ;
 $mon4=$_POST[ 'mon4' ] ; 
 $mon5=$_POST[ 'mon5' ] ;
 $mon6=$_POST[ 'mon6' ] ;
 $mon7=$_POST[ 'mon7' ] ;
 $mon8=$_POST[ 'mon8' ] ;
 $mon9=$_POST[ 'mon9' ] ; 
 $mon10=$_POST[ 'mon10' ] ;
 $mon11=$_POST[ 'mon11' ] ;
 $mon12=$_POST[ 'mon12' ] ;
 $mon13=$_POST[ 'mon13' ] ;   
 $mon14=$_POST[ 'mon14' ] ;  
  }
    else if(isset($_POST[ 'valider' ] )){
 $rev1=""[ '0' ] ;
 $rev2=""[ '0' ] ;
 $rev3=""[ '0' ] ;
 $mon1=""[ '0' ] ;
 $mon2=""[ '0' ] ;   
 $mon3=""[ '0' ] ;
 $mon4=""[ '0' ] ; 
 $mon5=""[ '0' ] ;
 $mon6=""[ '0' ] ;
 $mon7=""[ '0' ] ;
 $mon8=""[ '0' ] ;
 $mon9=""[ '0' ] ; 
 $mon10=""[ '0' ] ;
 $mon11=""[ '0' ] ;
 $mon12=""[ '0' ] ;
 $mon13=""[ '0' ] ;   
 $mon14=""[ '0' ] ;  
  }

    
  { $totrev = ($rev1 + $rev2 + $rev3);  }
    
{ $totdep = ($mon1 + $mon2 + $mon3 + $mon4 + $mon5 + $mon6 + $mon7 + $mon8 + $mon9 + $mon10 + $mon11 + $mon12 + $mon13); }

{ $total = ($totrev - $totdep); }
 
{ $total = ($totrev - $totdep); }

 { $percentage = ($totdep / $totrev )* 100; }   
    
{ $percentround = round($percentage, -1);}
    
{ $revround = round($totrev/500) * 500;}
   
{ $depround = round($totdep/500) * 500;}
 
    
echo 
    
  '
    <h2>Pourcentage de revenues dépensé</h2>
  <div class="percentage">
  <div class="barre" data-length='.$percentround.'></div></div>';
        ?>

<h2>Résumé</h2>
    <div class="words">
    <div class="leftword"><h3>Total des revenus mensuels</h3></div>
   <div class="centerword"><h3>Solde</h3></div>
     <div class="rightword"><h3>Totals des dépenses mensuelles</h3></div>
          
    <div class="leftword"><h2><?php echo $totrev ?>$</h2></div>
    <div class="centerword"><h2><?php echo $total ?>$</h2></div>
     <div class="rightword"><h2><?php echo $totdep ?>$</h2></div>
    </div>

  
   <div class="bargraph">
         <div class="boxnumber">
        <div class ="number">4500</div>
        <div class ="number">4000</div>
        <div class ="number">3500</div>
        <div class ="number">3000</div>
        <div class ="number">2500</div>
        <div class ="number">2000</div>
        <div class ="number">1500</div>
        <div class ="number">1000</div>   
        <div class ="number">500</div>
        <div class ="number">0</div>
        </div>
    <div class="graph">
         
        <div class ="postiongraph">
        <div class="bars2"><?php echo '<div class="barre2" data-length='.$revround.'></div>' ?><hr><h2>Revenus</h2></div>
    
   <div class="bars3"><?php echo '<div class="barre2" data-length='.$depround.'></div>' ?><hr><h2>Depenses</h2></div>
        
        </div>
     </div>   
</div>
  
  </div>     
    
    
    </body>

</html>