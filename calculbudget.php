<html>

<head>
     <meta charset="utf-8"/>
    <title> Budget Mensuel Simple</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head> 
    
    
<body>  

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
    
  { $totrev = ($rev1 + $rev2 + $rev3);  }
    
{ $totdep = ($mon1 + $mon2 + $mon3 + $mon4 + $mon5 + $mon6 + $mon7 + $mon8 + $mon9 + $mon10 + $mon11 + $mon12 + $mon13); }

{ $total = ($totrev - $totdep); }
 
{ $total = ($totrev - $totdep); }

 { $percentage = ($totdep / $totrev )* 100; }   
    
{$percentround = round($percentage, -1);}
       
echo 
    
'<div class="barreright"> <div class="barre" data-length="80"></div>'; 
   
    
    
    
         }

?>                         
      </div> 
    
       </body>

</html>