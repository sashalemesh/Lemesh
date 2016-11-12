<table width="100%">
	<tr>
		<td align="center"><h1>Добро пожаловать на наш сайт!</h1>
		<?php
		if(!getMenu($topMenu, FALSE))		
				echo 'MY_ERR_ON_GET_MENU';
		?>
		</td>
	</tr>
</table>