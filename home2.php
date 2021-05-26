    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">    <link rel="stylesheet" href="php.css">
        <title>Taxes</title>
    </head>
    <body>
    <div class=incomesalary>
    <h2>Income tax calculator</h2>
    <form class="income" method="post">
    <div class="input">
        <label>Salary in USD</label>
        <input class="w3-input w3-border w3-sand" type="number" name="salary_1">
        <input type="radio" id="yearly" name="year" value="<?php $year;?>">
        <label for="male">Yearly</label><br>
        <input type="radio" id="monthly" name="month" value="<?php $month;?>">
        <label for="female">Monthly</label><br>
        <label>Tax Free Allowance in USD</label>
        <input class="w3-input w3-border w3-sand" type="number" name="allowance_1"><br>
        <button class="button" name="calculate" value="calculate">Calculate</button>
    </div>
    </div>
    <?php   
    $d = '';
    $at = ''; 
    $a = '' ;    
    $aa = '';
    $aat = '';
    $aaa = '';
    $s = '';
    $bt = ''; 
    $b = '' ;    
    $bb = '';
    $bbt = '';
    $bbb = '';
    if (isset($_POST['month']) && (isset($_POST["calculate"]))){
        if ($_POST["salary_1"]< 10000){
            $d = ($_POST["salary_1"]) / 12 ;
            $at = 0; 
            $a = $_POST["salary_1"] - $at ;    
            $aa = $a + $_POST["allowance_1"];
            $aat = 0;
            $aaa = ($aa - $aat) / 12;
            $s = $d * 12 ;
            $bt = $at * 12 ;    
            $bbt = $aat * 12 ;  
            $bbb = $aaa * 12 ;
        
        }
        if (($_POST["salary_1"] > 10000) && ($_POST["salary_1"] < 25000)){
            $d = ($_POST["salary_1"]) / 12;
            $at = $_POST["salary_1"] * 0.11;
            $a = ($_POST["salary_1"] - $at) / 12 ;    
            $aa = $a + $_POST["allowance_1"];
            $aat = ($aa * 0.04) / 12 ;
            $aaa = ($aa - $aat) / 12 ; 
            $s = $d * 12 ;
            $bt = $at * 12 ;    
            $bbt = $aat * 12 ;
            $bbb = $aaa * 12 ;
    
        }
        if (($_POST["salary_1"] > 25000) && ($_POST["salary_1"] < 50000)){
            $d = ($_POST["salary_1"]) / 12;
            $at = $_POST["salary_1"] * 0.30;
            $a = ($_POST["salary_1"] - $at) / 12 ;    
            $aa = $a + $_POST["allowance_1"];
            $aat = ($aa * 0.04) / 12 ;
            $aaa = ($aa - $aat) / 12 ; 
        }
        if ($_POST["salary_1"] > 50000){
            $d = ($_POST["salary_1"]) / 12;
            $at = $_POST["salary_1"] * 0.45;
            $a = ($_POST["salary_1"] - $at) / 12 ;    
            $aa = $a + $_POST["allowance_1"];
            $aat = ($aa * 0.04) / 12 ;
            $aaa = ($aa - $aat) / 12 ; 
            $s = $d * 12 ;
            $bt = $at * 12 ;    
            $bbt = $aat * 12 ;
            $bbb = $aaa * 12 ;
        
}

    }
    else if (isset($_POST['year']) && (isset($_POST["calculate"]))){        
        if ($_POST["salary_1"]< 10000){
            $s = $_POST["salary_1"];
            $bt = 0; 
            $b = $_POST["salary_1"] - $bt ;    
            $bb = $b + $_POST["allowance_1"];
            $bbt = 0;
            $bbb = $bb - $bbt;
            $d = $s / 12 ;
            $at = $bt / 12 ;
            $aat = $bbt / 12 ; 
            $aaa = $bbb / 12 ;
        
        }
        if (($_POST["salary_1"] > 10000) && ($_POST["salary_1"] < 25000)){
            $s = $_POST["salary_1"];
            $bt = $_POST["salary_1"] * 0.11;
            $b = $_POST["salary_1"] - $bt ;    
            $bb = $b + $_POST["allowance_1"];
            $bbt = $bb * 0.04;
            $bbb = $bb - $bbt;
            $d = $s / 12 ;
            $at = $bt / 12 ;
            $aat = $bbt / 12 ; 
            $aaa = $bbb / 12 ;

        }
        if (($_POST["salary_1"] > 25000) && ($_POST["salary_1"] < 50000)){
            $s = $_POST["salary_1"];
            $bt = $_POST["salary_1"] * 0.30;
            $b = $_POST["salary_1"] - $bt ;
            $bb = $b + $_POST["allowance_1"];
            $bbt = $bb * 0.04;
            $bbb = $bb - $bbt;
            $d = $s / 12 ;
            $at = $bt / 12 ;
            $aat = $bbt / 12 ; 
            $aaa = $bbb / 12 ;

        }
        if ($_POST["salary_1"] > 50000){
            $s = $_POST["salary_1"];
            $bt = $_POST["salary_1"] * 0.45;
            $b = $_POST["salary_1"] - $bt ;
            $bb = $b + $_POST["allowance_1"];
            $bbt = $bb * 0.04;
            $bbb = $bb - $bbt;
            $d = $s / 12 ;
            $at = $bt / 12 ;
            $aat = $bbt / 12 ; 
            $aaa = $bbb / 12 ;
    }
}

    ?>
    <div class=tables>
        <table style="width:100%">
    <tr>
        <th>Yearly</th>
        <th>Monthly</th> 
    </tr>	
    <tr>
        <td>Total salary : <?php echo $s; ?></td>
        <td>Total salary : <?php echo $d; ?></td>
    </tr>
    <tr>
        <td>Tax amount : <?php echo $bt; ?></td>
        <td>Tax amount : <?php echo $at; ?></td>
    </tr>
    <tr>
        <td>social security : <?php echo $bbt; ?></td>
        <td>social security : <?php echo $aat; ?></td>
    </tr>
    <tr>
        <td>salary after tax : <?php echo $bbb; ?></td>
        <td>salary after tax : <?php echo $aaa; ?></td>
    </tr>
    </table>
    <button class="button" name="clear" value="clear">Clear</button>
    <?php
     if (isset($_POST['clear'])){
         $s = 0 ;
         $d = 0 ;
         $bt = 0 ;
         $at = 0 ;
         $bbt = 0 ;
         $aat = 0 ;
         $bbb = 0 ;
         $aaa = 0 ;

     }
    ?>
    </div>
    </form>
    </body>
    </html>
