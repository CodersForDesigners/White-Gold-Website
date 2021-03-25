<?php
/*
 *
 * This is a sample page you can copy and use as boilerplate for any new page.
 *
 */
require_once __DIR__ . '/../inc/above.php';

// Page-specific preparatory code goes here.

?>





<!-- New Section -->
<style type="text/css">
	.tile-grid {
		display: grid;
		grid-template-columns: 1fr 1fr 1fr 1fr;
		/*grid-auto-rows: calc((var(--space-100) * 1.5) - (var(--space-25)/1.5));*/
		grid-auto-rows: calc((var(--space-100) * 2.25) - (var(--space-25)/1.5));
		grid-gap: var(--space-25);
		counter-reset: order;
	}

	.tile-grid .tile {
		position: relative;
		overflow: hidden;
	}
	
	.rounded { border-radius: calc( (var(--container-width)/12)/6 ); }

	.tile-grid .tile.x2x1 { grid-column: span 2; }
	.tile-grid .tile.x2x2 { grid-column: span 2; grid-row: span 2; }

	.t-p { font-size: calc( (var(--container-width)/12)/3 ); }
	.t-h5 { font-size: calc( (var(--container-width)/12)/2 ); }
	.thumb { height: 100%; height: var(--space-100); }

	@media( min-width: 640px )  {
		.tile-grid {
			/*grid-auto-rows: calc((var(--space-100) * 3) - (var(--space-25)/1.5));*/
			grid-auto-rows: calc((var(--space-100) * 5) - (var(--space-25)/1.5));
		}

		.thumb { height: 100%; height: var(--space-200); }
		/*.thp { font-size: calc( var(--space-100)/5 ); }*/
	}
</style>
<section class="new-section fill-light space-50-top-bottom">
	<div class="container">
		<div class="row landing space-50-top-bottom" style="height: calc( var(--container-width) * 0.75 );">
			<div class="columns small-12">
				<div class="t-h5">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. A, cupiditate? Dolorum adipisci nihil commodi unde sit atque vitae, minus? Labore incidunt modi ex reprehenderit voluptatum autem vero velit minima. Suscipit.
				</div>
			</div>
		</div>
		<div class="row tiles space-50-top-bottom">
			<div class="columns small-12 tile-grid">
				<div class="tile rounded x2x1 fill-blue-2 space-25">
					<div class="t-h5">Lorem ipsum dolor sit amet.</div>
				</div>
				<div class="tile rounded x2x1 fill-blue-3 space-25">
					<div class="t-h5">Consectetur adipisicing elit.</div>
				</div>
				<div class="tile">
					<div class="thumb rounded fill-blue-4">&nbsp;</div>
					<div class="t-p space-min-top">Dolorum adipisci nihil commodi.</div>
				</div>
				<div class="tile">
					<div class="thumb rounded fill-blue-5">&nbsp;</div>
					<div class="t-p space-min-top">Unde sit atque vitae, minus?</div>
				</div>
				<div class="tile">
					<div class="thumb rounded fill-neutral-4">&nbsp;</div>
					<div class="t-p space-min-top">Labore incidunt modi reprehende.</div>
				</div>
				<div class="tile">
					<div class="thumb rounded fill-dark">&nbsp;</div>
					<div class="t-p space-min-top">Voluptatum autem vero velit minima.</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: New Section -->





<?php require_once __DIR__ . '/../inc/below.php'; ?>
