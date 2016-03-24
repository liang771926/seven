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
		<form action="">
		<h1 style="padding-left:50px">留言板</h1>
			<table>
				<textarea name="" id="text" cols="30" rows="10"></textarea><br />
				<input type="button" id="button" value="提交" />
			</table>


			<div id="abc" style=" margin-top:50px">
			<table>
				@foreach ($arr as $key => $value)
				<tr>
					<td>{{$value->text}}</td>
					<td><a href="javascript:void(0)" id="del" va="{{$value->id}}">删除</a>/<a href="indexupd?id={{$value->id}}&text={{$value->text}}">修改</a></td>
					</tr>
				@endforeach
			</table>
			</div>
			{!!$arr->render()!!}
		</form>
		
</body>
</html>
<script src="./js/jquery1-8-0.js"></script>
<script>
	$(document).on("click","#button",function(){
		var text = $("#text").val();
		$.get('indexadd',{text:text},function(aaa){
			$("#abc").html(aaa);
		})
	})
	$(document).on("click","#del",function(){
		var id = $(this).attr('va');
		$.get('indexdel',{id:id},function(bbb){
			$("#abc").html(bbb);
		})
	})

</script>