<?php 
	foreach($data as $key=>$cate):
?>
	<li class="nav-item">
		<a href="danh-muc/lop-<?php echo $cate["class_id"]; ?>"><?php echo $cate["class"]; ?></a>
		<button ><i class="fa fa-angle-down sidebar-icon-plus" id="12"> </i></button>

		<div class="dropdown-menu">
			<ul class="ul_dropdown">
				<div class="column">
					<?php 
						foreach($cate["subject"] as $sub): 
					?>
						
						<li><a href=""><?php echo $sub->name_subject; ?></a></li>
					<?php endforeach; ?>
				</div>
				
				<div class="column1">
					<div class="banner_class">
						<div class="border"></div>
						<div class="number" ><?php echo $cate["class_id"]; ?></div>
					</div>
				</div>
			</ul>
		</div>
	</li>
<?php endforeach; ?>
