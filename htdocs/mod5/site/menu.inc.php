
<table width="100%">
	<tr>
		<td>
			<p>Меню</p>
			<?php
			/*
			ЗАДАНИЕ 2
			- Отрисуйте меню вызвая функцию getMenu()
			*/
			if(!getMenu($leftMenu))
				echo 'MY_ERR_ON_GET_MENU';
			?>
		</td>
	</tr>
</table>