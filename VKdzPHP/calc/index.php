<?php
if (isset($_POST['submit'])) {
    echo $_POST['firstN'];
}
$firstN = $_POST['firstNumber'];
$secondN = $_POST['secondNumber'];
$sign = $_POST['sign'];

function mathOp() {
    if ($sign == '+') {
        return $firstN + $secondN;
    } elseif ($sign == '-') {
        return $firstN - $secondN;
    } elseif ($sign == '*') {
        return $firstN * $secondN;
    } elseif ($sign == '/') {
        return $firstN / $secondN;
    }
}
echo mathOp($firstN, $secondN, $sign);

?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    function update() {
        let firstN = $("#firstNumber").val()
        let sign = $("#sign").val()
        let secondN = $("#secondNumber").val()
        let query = "firstN="+firstN+"&sign="+sign+"&secondN="+secondN
        $.ajax({
			type: "POST",
			url: "index.php",
			data: query,
			success: function(answer){
				$("h1").html(answer)
			}
		});
    }
</script>

<h1></h1>
<label>
    введите первое число
    <input type="text" name="firstNumber" value="">
</label>
<label>
    выберите знак
    <select name="sign" value="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
</label>
<label>
    введите второе число
    <input type="text" name="secondNumber" value="">
</label>
<input type="button" onclick="update()" value="solve">