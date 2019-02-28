
<div class="content-1">
	<div class="title-content">
		<div class="title-heading">
			Mới nhất

		</div>
		<div class="btn-group">

		</div>

		<div class="view-all"><a href="tat-ca-bai-viet-moi-nhat">Xem tất cả <img src="Public/Client/images/trang-chu/icon-view-all.png"></a></div>
	</div>
	<div class="line-heading"></div>
	<div style="clear: both;"></div>
	<div class="post">
		<?php foreach($postcontrol as $post): ?>
			<a href="" class="post-content">
				
				<div class="card-post">
					<div class="title-post" title="<?php echo $rows->name; ?>">
						<?php echo $post["name"]; ?>
					</div> 
					<div class="text-author">
						<div class="author">
							<?php echo $post["athour"]; ?>
						</div>
						<div class="favorite" style="display: flex; justify-content:flex-end;">
							<div><img src="Public/Client/images/trang-chu/icon-view.png" alt="icon-view">&nbsp;<?php echo $post["view"]; ?></div>&nbsp;&nbsp;
							<div><img src="Public/Client/images/trang-chu/icon-favorite.png" alt="icon-like">&nbsp;<?php echo $post["favorite"]; ?></div>

						</div>
					</div>
					<div class="text-content"><?php echo $post["content"] ?></div>

				</div>
			</a>
			
		<?php endforeach; ?>

	</div>
</div>
