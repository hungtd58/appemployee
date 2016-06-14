<?php
	function error($errors,$text) {
		if(count($errors->get($text)) > 0) ?>
		<div class="text-danger">
			<ul> <?php
				foreach ($errors->get($text) as $error)
					echo '<li>'.$error.'</li>'; ?>
			</ul>
		</div> <?php
	}

