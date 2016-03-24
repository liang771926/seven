<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>修改页面</title>
</head>
<body>
		<form action="">
			<h1 style="padding-left:50px">留言板</h1>
			<table>
			<input type="hidden" id="t_id" value="<?php echo $arr['id']?>" />
				<textarea name="" id="text" cols="30" rows="10"><?php echo $arr['text'] ?></textarea><br />
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
		 $.get("indexupde",{id:id,text:text},function(aaa){
		 	//alert(aaa);
		 	location.href='index';
		 })
	})


</script>