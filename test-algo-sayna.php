<?php

/**
 * Classe pour test Algorithme chez Sayna
 * @author Patrice RAFAHELIARISON
 *
 */
class SaynaTestAlgo {

  //Algorithme Somme (01);
  function Somme() {
    $nN = $_GET['N'];
    $nS = 0;
    for ( $nI = 1; $nI <= $nN - 1; $nI ++ ) {
      $nS += 1;
    }
    echo 'La somme des ' . $nN . ' premiers nombres est: ' . $nS;
  }

  //Algorithme MaxMin (02);
  function MaxMin() {
    $nN = $_GET['N'];
    $nX = $_GET['X'];
    echo 'Donner un entier N > 0<br/>';
    if ( $nN > 0 ) {
      $nMax = $nMin = $nX;
      for ( $nI = 2; $nI <= $nN; $nI ++ ) {
        if ( $nMax < $nX ) {
          $nMax = $nX;
        } else if ( $nMin > $nX ) {
          $nMin = $nX;
        }
        echo 'Le Minimun des valeurs est: ' . $nMin . ', le Maximum est : ' . $nMax;
      }
    }
  }

    //Algorithme QuotReste (03);
    function QuotReste() {
      echo 'Donner deux entiers A et B<br/>';
      $nA = $_GET['A'];
      $nB = $_GET['B'];
      $nQ = 0;
      $nR = $nA;
      while( $nR > $nB ) {
        $nQ += 1;
        $nR -= $nB;
      }
      echo 'Le Quotient de A/B est :' . $nQ . ', le reste de A/B est : ' . $nR;
    }

    //Algorithme Produit (04);
    function Produit() {
      echo 'Donner deux entiers A et B<br/>';
      $nA = $_GET['A'];
      $nB = $_GET['B'];
      if ( 0 == $nA || 0 == $nB ) {
        $nP = 0;
      } else {
        $nP = 0;
        for ( $nI = 1; $nI <= $nB; $nI++ ) {
          $nP += $nA;
        }
      }
      echo 'Le produit A*B est : ' . $nP;
    }

    //Algorithme AdivB (05);
    function AdivB() {
      echo 'Donner deux entiers positifs A,B<br/>';
      $nA = $_GET['A'];
      $nB = $_GET['B'];
      if ( 0 < $nA && 0 < $nB ) {
        $nR = $nA;
        while( $nR > 0 ) {
          $nR -= $nB;
        }
        echo 0 == $nR ? $nA . ' est divisible par ' . $nB : $nA . ' n\'est divisible par ' . $nB;
      }
    }

    //Algorithme Diviseurs (06);
    function Diviseurs() {
      echo 'Donner un entier X<br/>';
      $nX = $_GET['X'];
      echo 'Les diviseurs de ' . $nX . ' sont : <br/>';
      $nM = $nX / 2;
      for ( $nI = 1; $nI <= $nM; $nI++ ) {
        if ( 0 == ($nX % $nI)  ) {
          echo $nI . '<br/>';
        }
      }
      echo '<br/>'. $nX;
    }

    //Algorithme Premier (07);
    function Premier() {
      echo 'Donner un entier X<br/>';
      $nX = $_GET['X'];
      $bPr = TRUE;
      if ( 1 == $nX ) {
        $bPr = FALSE;
      } else {
        $nM = $nX / 2;
        $nI = 2;
        while ( $nI < $nM && $bPr ) {
          if ( 0 == ($nX % $nI) ) {
            $bPr = FALSE;
          }
          $nI += 1;
        }
      }
      echo $bPr ? $nX . ' est premier' : $nX . ' n\'est premier';
    }

    //Algorithme SommeChiff (08)
    function SommeChiff() {
      echo 'Donner un entier naturel N<br/>';
      $nN = $_GET['N'];
      if ( 0 < $nN) {
        $nS = $nR = 0;
        while ( 0 < $nR ) {
          $nS += $nR % 10;
          $nR = $nR / 10;
        }
        echo 'La somme des chiffres qui composent ' . $nN . ' est : ' . $nS;
      }
    }
  }

}
