<?php
use yii\widgets\LinkPager;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>留言板</title>
	<style>
		form{ margin-left: 200px;}

	</style>
</head>
<body>

		<h1 style=" margin-left:200px">留言板</h1>
		<form action="">
			<table>
				<textarea name="" id="text" cols="30" rows="10"></textarea><br />
				<input type="button" id="button" value="提交" />
			</table>




			<div id="abc" style=" margin-top:50px">
			<table>
				<?php foreach ($models as $key => $value) { ?>
					<tr>
				<td><?php echo $value['text']?></td>
				<td><a href="javascript:void(0)" id="del" va="<?php echo $value['id']?>">删除</a>/<a href="index.php?r=liuyan/liuupd&id=<?php echo $value['id']?>&text=<?php echo $value['text']?>">修改</a></td>
					</tr>

			<?php 	} ?>
			</table>
			</div>
<?php
echo LinkPager::widget([
    'pagination' => $pages,
]);
		?>
		<div id="def">
			
		</div>

		</form>
</body>
</html>
<script src="./js/jquery1-8-0.js"></script>
<script>
	$(document).on("click","#button",function(){
		var text=$("#text").val();
		$.post('index.php?r=liuyan/liuadd',{text:text},function(aaa){
			$("#abc").html(aaa);
		})
			})
	$(document).on("click","#del",function(){
		var id = $(this).attr('va');
		$.post('index.php?r=liuyan/liudel',{id:id},function(bbb){
			$("#abc").html(bbb);
		})
	})
</script>