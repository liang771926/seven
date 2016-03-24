<table>
				<?php foreach ($arr as $key => $value) { ?>
				<tr>
					<td><?php echo $value->text?></td>
					<td><a href="javascript:void(0)" id="del" va="<?php echo $value->id?>">删除</a>/<a href="indexupd?id=<?php echo $value->id?>&text=<?php echo $value->text?>">修改</a></td>
					</tr>
				<?php } ?>
			</table>