<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<style>
	form{ margin-left: 200px;} 
	</style>
</head>
<body>
	
		<h1 style=" margin-left:200px">留言板</h1>
		<form action="">
			<table>
				<input type="hidden" id="t_id" value="<?php echo $id?>" />
				<textarea name="" id="text" cols="30" rows="10"><?php echo $text?></textarea><br />
				<input type="button" id="button" value="修改" />
			</table>
			</form>
</body>
</html>
<script src="./js/jquery1-8-0.js"></script>
<script>
	$(document).on("click","#button",function(){
		 var id = $("#t_id").val();
		 var text = $("#text").val();
		 $.post("index.php?r=liuyan/liuupde",{id:id,text:text},function(){
		 	location.href='index.php?r=liuyan/index';
		 })
	})


</script>