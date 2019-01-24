<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 24/01/2019
 * Time: 13:33
 */

include "quadraticEquation.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $phuongtrinh = new QuadraticEquation($a, $b, $c);
    $root1 = null;
    $root2 = null;
}
?>
    <form>
        <h2> Giải phương trình bậc hai</h2>
        <span><?php echo $a ?></span>
        <label>x<sup>2</sup> + </label>
        <span><?php echo $b ?></span>
        <label>x + </label>
        <span><?php echo $c ?></span>
        <label>= 0 </label><br>
        <br>
        <input type="submit" name="submit" value="Tính">
        <span id="ketqua"> </span>
    </form>
<?php
if ($a != 0) {
    if ($phuongtrinh->getDelta() > 0) {
        $root1 = $phuongtrinh->getRoot1();
        $root2 = $phuongtrinh->getRoot2();
        echo "Nghiệm 1:  " . $root1 . "<br/>";
        echo "Nghiệm 2:  " . $root2;
    } else if ($phuongtrinh->getDelta() == 0) {
        $root1 = $phuongtrinh->getExprience();
        echo "Nghiệm kép: " . $root1;
    } else if ($phuongtrinh->getDelta() < 0) {
        echo "Phương trình vô nghiệm";
    }
} else {
    echo "Không phải phương trình bậc hai";
}