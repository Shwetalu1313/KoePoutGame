<?php

$title = <<<START
<h1>ကိုးပေါက်ဂိမ်း</h1>
ထိဂိမ်းတွင် player 1 and 2 ပါရှိပြီး။ တစ်ယောက်စီကို 0-9 ပါဝင်သောကဒ် 10ချပ်မျှဝေပါသည်။ 
START;
echo $title;

$arr1 = array();
$arr2 = array();

for ($i = 0; $i < 10; $i++) { 
    $player1 = rand(0, 9); // Get random num
    $player2 = rand(0, 9);

    $arr1[$i] = $player1; // Input into array by index
    $arr2[$i] = $player2;

    echo "<table>";
    echo "<tr><td>Player 1(" . $i . " Time):</td><td>" . $arr1[$i] . "</td></tr>";
    echo "<tr><td>Player 2(" . $i . " Time):</td><td>" . $arr2[$i] . "</td></tr>";
    echo "<tr><td colspan='2'><hr></td></tr>";
    echo "</table>";
}

$sum1 = array_sum($arr1); // Sum the array
$sum2 = array_sum($arr2);

$finalval1 = ToNine($sum1);
$finalval2 = ToNine($sum2);

echo "<table>";
if ($finalval1 > $finalval2) {
    echo "<tr><td>Player 1 is the winner.</td></tr>";
    echo "<tr><td>Player 1:</td><td>" . $finalval1 . "</td></tr>";
    echo "<tr><td>Player 2:</td><td>" . $finalval2 . "</td></tr>";
} elseif ($finalval1 == $finalval2) {
    echo "<tr><td>DRAW</td></tr>";
} else {
    echo "<tr><td>Player 2 is the winner.</td></tr>";
    echo "<tr><td>Player 1:</td><td>" . $finalval1 . "</td></tr>";
    echo "<tr><td>Player 2:</td><td>" . $finalval2 . "</td></tr>";
}
echo "</table>";

function ToNine($total): int {
    // It will round up
    $getlast = ceil($total / 10);
    return $getlast;
}
