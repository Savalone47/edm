 
<div id="page-wrapper">
    <div class="panel panel-default" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
				<div class="panel-heading">
					<h1><?=$title?></h1>
					<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
				</div>
				<div class="panel-body no-padding" style="display: block;">
					<div class="col-md-1">
								<th>Heure</th><br><hr>
								<?php
								$i = 0;
									while ( $i <= $heure) { 
										$a = $i+1;?>
										<th><?php echo $a."e hrs";?></th><br><hr> <?php
										$i = $i + 1;
									}
								?>
								<th></th><br>
							</div>
							<div class="col-md-2">
								<th>lundi</th>
								<?php
									$c = 0;
									foreach ($lundi as $lun) {
										$c = $c + 1;?>
										<th><?php echo $lun['ncours'];?></th><br><hr>
									<?php
									}
									if ($c < $heure) {
										$c = $heure - $c;
										while ($c != 0) {?>
											<th>-</th><br><hr>
										<?php $c = $c - 1;
										}
									}
								?>
							</div>
							<div class="col-md-2">
								<th>lundi</th>
							</div>
							<div class="col-md-2">
								<th>lundi</th>
							</div>
							<div class="col-md-2">
								<th>lundi</th>
							</div>
							<div class="col-md-2">
								<th>lundi</th><br>
							</div>
							<div class="col-md-1">
								<th>lundi</th><br><hr>
								<th>lundi</th><br>
							</div>
				</div>
			</div>
<!--    <div class="col-md-2"></div>-->
</div>