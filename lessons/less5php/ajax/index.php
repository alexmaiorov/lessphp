<?php
    session_start();
    if($_GET['success'] && $_SESSION['login']):?>
        <h1>Welcome, auth successfull</h1>
    <?php endif;
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    function f() {
        let login = $("#login").val()
        let pass = $("#pass").val()
        console.log(pass);
        let query = "login="+login+"&pass="+pass
        $.ajax({
			type: "POST",
			url: "server.php",
			data: query,
			success: function(answer){
				$("h1").html(answer)
			}
		});
    }
</script>
    <h1></h1>
    <label>
        insert login
        <input type="text" id="login" value="<?=$_SESSION['login']?>">
    </label>
    <label>
        insert password
        <input type="password" id="pass" value="<?=$_SESSION['pass']?>">
    </label>
    <input type="button" onclick="f()" value="enter">
