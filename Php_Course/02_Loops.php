<!-- <?php
$i = 1;
while ($i <= 5) {
    echo "While loop iteration $i<br>";
    $i++;
}
?> -->
<!-- b) Do-while statement -->

<?php
$j = 1;
do {
    echo "Do-while loop iteration $j<br>";
    $j++;
} while ($j <= 5);
?>

<!-- c) For statement -->

<?php
for ($k = 1; $k <= 5; $k++) {
    echo "For loop iteration $k<br>";
}
?>

<!-- d) Foreach statement -->

<?php
$array = ["A", "B", "C", "D", "E"];
foreach ($array as $index => $value) {
    echo "Foreach loop iteration $index with value $value<br>";
}
?>
