<?php

HTML::title(array('title'=>$L->g('About'), 'icon'=>'support'));

echo '
<table class="uk-table uk-table-striped">
<thead>
	<tr>
	<th class="uk-width-1-5"></th>
	<th class="uk-width-3-5"></th>
	</tr>
</thead>
<tbody>
';

	echo '<tr>';
	echo '<td>Bludit version</td>';
	echo '<td>'.BLUDIT_VERSION.'</td>';
	echo '</tr>';

	echo '<tr>';
	echo '<td>Bludit codename</td>';
	echo '<td>'.BLUDIT_CODENAME.'</td>';
	echo '</tr>';

	echo '<tr>';
	echo '<td>Bludit build</td>';
	echo '<td>'.BLUDIT_BUILD.'</td>';
	echo '</tr>';

	echo '<tr>';
	echo '<td>PHP version</td>';
	echo '<td>'.phpversion().'</td>';
	echo '</tr>';

	echo '<tr>';
	echo '<td>PHP modules</td>';
	echo '<td>'.implode(', ',get_loaded_extensions()).')</td>';
	echo '</tr>';

echo '
</tbody>
</table>
';
