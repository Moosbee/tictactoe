<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>TicTacToe</title>
    <link rel="stylesheet" href="tictactoestyles.css">


</head>

<body>


    <?php


    $tictac = 0;
    $stre = "as";
    $link[0] = "xoonxonnx";
    $linke[0] = '';
    $linkel[0] = '</a>';
    $photo[0] = '<img src="./kreis.gif" alt="o" width="100" height="100">';
    $tru = true;
    $fals = false;
    $strer = "nnnnnnnnn";
    $won = false;
    $tre = "x";
    $winn = "n";

    echo '<div class="box">';
    echo '<div class="cntent">';


    if (isset($_GET["type"]) && (strlen(($_GET["type"])) == 9) && (isset($_GET["route"]))) {
        $stre = $_GET["type"];
        $strer = $stre;
        $tru = $_GET["route"];
        if ($tru === "true") {
            $fals = "false";
        } else {
            $fals = "true";
        }
        while ($tictac <= 8) {
            if ($stre[$tictac] == 'x') {
                $photo[$tictac] = '<img src="./yx9.gif" alt="x" width=100% height=100%>';
                $link[$tictac] = $stre;
                $linke[$tictac] = '</a>';
                $linkel[$tictac] = '';
            } elseif ($stre[$tictac] == 'o') {
                $photo[$tictac] = '<img src="./kreis.gif" alt="o" width=100% height=100%>';
                $link[$tictac] = $stre;
                $linke[$tictac] = '</a>';
                $linkel[$tictac] = '';
            } else {
                $photo[$tictac] = '';
                $link[$tictac] = $stre;
                $linke[$tictac] = '';
                $linkel[$tictac] = '</a>';
                if ($tru == "true") {
                    $link[$tictac][$tictac] = 'o';
                } else {
                    $link[$tictac][$tictac] = 'x';
                }
            }
            $tictac = $tictac + 1;
        }
        $tre = "x";
        for ($i = 1; $i <= 2; $i++) {
            if (
                (
                    ($stre[0] == $tre && $stre[1] == $tre && $stre[2] == $tre) ||
                    ($stre[3] == $tre && $stre[4] == $tre && $stre[5] == $tre) ||
                    ($stre[6] == $tre && $stre[7] == $tre && $stre[8] == $tre) ||
                    ($stre[0] == $tre && $stre[3] == $tre && $stre[6] == $tre) ||
                    ($stre[1] == $tre && $stre[4] == $tre && $stre[7] == $tre) ||
                    ($stre[2] == $tre && $stre[5] == $tre && $stre[8] == $tre) ||
                    ($stre[0] == $tre && $stre[4] == $tre && $stre[8] == $tre) ||
                    ($stre[2] == $tre && $stre[4] == $tre && $stre[6] == $tre))
            ) {
                $won = true;
                $winn = $tre;
            }
            $tre = "o";
        }
        if ($won) {
            echo '<div class="tictac tic" id="bilda" >' . $photo[0] . '</div>';
            echo '<div class="tictac tic" id="bildb" >' . $photo[1] . '</div>';
            echo '<div class="tictac tic" id="bildc" >' . $photo[2] . '</div>';
            echo '<div class="tictac tic" id="bildd" >' . $photo[3] . '</div>';
            echo '<div class="tictac tic" id="bilde" >' . $photo[4] . '</div>';
            echo '<div class="tictac tic" id="bildf" >' . $photo[5] . '</div>';
            echo '<div class="tictac tic" id="bildg" >' . $photo[6] . '</div>';
            echo '<div class="tictac tic" id="bildh" >' . $photo[7] . '</div>';
            echo '<div class="tictac tic" id="bildi" >' . $photo[8] . '</div>';

            if ($winn == "o") {
                echo '<div class="tic" id="bildl" ><h1>Wonnn!!!!<br> Der Winner ist:<h1></div>';
                echo '<div class="tic" id="bildj" ><img src="./kreis.gif" alt="o" width=100% height=100%></div>';
            } else {
                echo '<div class="tic" id="bildl" ><h1>Wonnn!!!!<br> Der Winner ist:<h1></div>';
                echo '<div class="tic" id="bildj" ><img src="./yx9.gif" alt="x" width=100% height=100%></div>';
            }
        } else {
            echo '<a href="?type=' . $link[0] . '&route=' . $fals . '">' . $linke[0] . ' <div class="tictac tic" id="bilda" >' . $photo[0] . '</div>' . $linkel[0];
            echo '<a href="?type=' . $link[1] . '&route=' . $fals . '">' . $linke[1] . ' <div class="tictac tic" id="bildb" >' . $photo[1] . '</div>' . $linkel[1];
            echo '<a href="?type=' . $link[2] . '&route=' . $fals . '">' . $linke[2] . ' <div class="tictac tic" id="bildc" >' . $photo[2] . '</div>' . $linkel[2];
            echo '<a href="?type=' . $link[3] . '&route=' . $fals . '">' . $linke[3] . ' <div class="tictac tic" id="bildd" >' . $photo[3] . '</div>' . $linkel[3];
            echo '<a href="?type=' . $link[4] . '&route=' . $fals . '">' . $linke[4] . ' <div class="tictac tic" id="bilde" >' . $photo[4] . '</div>' . $linkel[4];
            echo '<a href="?type=' . $link[5] . '&route=' . $fals . '">' . $linke[5] . ' <div class="tictac tic" id="bildf" >' . $photo[5] . '</div>' . $linkel[5];
            echo '<a href="?type=' . $link[6] . '&route=' . $fals . '">' . $linke[6] . ' <div class="tictac tic" id="bildg" >' . $photo[6] . '</div>' . $linkel[6];
            echo '<a href="?type=' . $link[7] . '&route=' . $fals . '">' . $linke[7] . ' <div class="tictac tic" id="bildh" >' . $photo[7] . '</div>' . $linkel[7];
            echo '<a href="?type=' . $link[8] . '&route=' . $fals . '">' . $linke[8] . ' <div class="tictac tic" id="bildi" >' . $photo[8] . '</div>' . $linkel[8];
        }
    } else {
        $photo[0] = '';
        echo '<a href="?type=xnnnnnnnn&route=true"> <div class="tictac tic" id="bilda" >' . $photo[0] . '</div></a>';
        echo '<a href="?type=nxnnnnnnn&route=true"> <div class="tictac tic" id="bildb" >' . $photo[0] . '</div></a>';
        echo '<a href="?type=nnxnnnnnn&route=true"> <div class="tictac tic" id="bildc" >' . $photo[0] . '</div></a>';
        echo '<a href="?type=nnnxnnnnn&route=true"> <div class="tictac tic" id="bildd" >' . $photo[0] . '</div></a>';
        echo '<a href="?type=nnnnxnnnn&route=true"> <div class="tictac tic" id="bilde" >' . $photo[0] . '</div></a>';
        echo '<a href="?type=nnnnnxnnn&route=true"> <div class="tictac tic" id="bildf" >' . $photo[0] . '</div></a>';
        echo '<a href="?type=nnnnnnxnn&route=true"> <div class="tictac tic" id="bildg" >' . $photo[0] . '</div></a>';
        echo '<a href="?type=nnnnnnnxn&route=true"> <div class="tictac tic" id="bildh" >' . $photo[0] . '</div></a>';
        echo '<a href="?type=nnnnnnnnx&route=true"> <div class="tictac tic" id="bildi" >' . $photo[0] . '</div></a>';
    }
    echo '<a href="./tictacto.php"> <div class="tic" id="bildk" ><h2>Back</h2></div></a>';
    echo '</div>';
    echo '</div>';
    ?>
    <br>
    <?php
      phpinfo();
    ?>

</body>

</html>