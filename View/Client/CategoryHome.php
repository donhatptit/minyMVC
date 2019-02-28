<?php 
	foreach($sub as $key=>$cate):
?>
	<div class="content-1">
		<div class="title-content">
			<div class="title-heading">
				<?php echo $cate["class"]; ?>
			</div>
			<div class="btn-group">
				
					<?php foreach($cate["subject"] as $outline): ?>

					<a href="" class="outline"><?php echo $outline->name_subject; ?></a>
				<?php endforeach; ?>
				</div>
				
				<div class="view-all"><a href="">Xem tất cả <img src="Public/Client/images/trang-chu/icon-view-all.png"></a></div>
			</div>
			<div class="line-heading"></div>
			<div style="clear: both;"></div>
			<div class="post">


				<a href="" class="post-content">

					<div class="card-post">
						<div class="title-post" title="<?php echo $pt->name; ?>">ok</div>
						<div class="text-author">
							<div class="author">
								ok
							</div>
							<div class="favorite" style="display: flex; justify-content:flex-end;">
								<div><img src="Public/Client/images/trang-chu/icon-view.png" alt="icon-view">&nbsp;View</div>&nbsp;&nbsp;
								<div><img src="Public/Client/images/trang-chu/icon-favorite.png" alt="icon-like">&nbsp;favorite</div>

							</div>
						</div>
						<div class="text-content">Content</div>

					</div>
				</a>



			</div>
		</div>

<?php endforeach; ?>