<div class="row">
	<div class="col-xs-12">
		<h1>Merchandise</h1>
		<?php if(count($merchandise) > 0): ?>
		<?php foreach($merchandise as $item):?> 
				<h2><?= $item->name; ?> ($<?= $item->price; ?>)</h2>
				<p> <?= $item->description; ?></p>
			<?php endforeach; ?>
		<?php else: ?>
			<p>There is no merchandise avaliable at this moment. Sorry!!!</p>
		<?php endif; ?>
	</div>
</div>