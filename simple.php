<?php
/*
/*
	여러줄 주석 에러나는 케이스
*/
//*/
	/*나는 주석
		//인라인 주석
		//이거는 여러줄 주석에 영향을 주는가?
	*/
    echo "<html>";
    echo "  <head>"
?>
<html>
    <head>
		<meta charset="UTF-8">
        <title>PHP실습</title>
		<!--link rel = "stylesheet" type="text/css" href="./css/style.css">
		<style>
		/* CSS인라인*/
		</style>
		<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </head>
    <body>
		<h1 class = "very_important">This is server</h1>
		
		<button type="button"
		class="btn btn-warning">나는 버튼</button>

        <img src="./imgs/1.jpg" alt="이미지"
			id="main_banner"
			class = "very_important">
		<input type = "text" name="name"
			id="student_name" value="지창민"
			class = "very_important">
    </body>
</html>
