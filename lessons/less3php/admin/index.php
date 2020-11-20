<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    function update(id) {
        let id_price = "price_"+id
        let price = document.getElementById(id_price).value;
        let query = "id="+id+"&price="+price
        $.ajax({
			type: "POST",
			url: "server.php",
			data: query,
			success: function(answer){
				alert(answer);
			}
		});
    }
</script>
<?php
include "config.php";
$sql = "SELECT * FROM `product`";
$res = mysqli_query($connect, $sql);

$form = "<table style='margin: 0 auto; text-align:center;' border='1' whidth='400'>";

while($data = mysqli_fetch_assoc($res)) {
    $form .= "<tr><td>".$data['title']."</td><td><input id='price_".$data['id']."' type='text' value=".$data['price']."></td>";
    $form .= "<td><input type = 'button' onclick ='update(".$data['id'].")' value='save'></td></tr>";
}
$form .= "</table>";
echo $form;

?>