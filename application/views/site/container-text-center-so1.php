<?php foreach ($catalog_list as $catalog_item): ?>
	<div class="row">
		<p style="font-size: 40px; color: black;"><?php echo $catalog_item->name; ?></p><br>
		<?php switch ($catalog_item->id_catalog){
				case 1:
					$products = $product_fried_chicken;
					break;
				case 2:
					$products = $product_combo;
					break;
				case 3:
					$products = $product_burger_rice;
					break;
			}
			foreach ($products as $row): ?>
			<div class="col-md-3">
				<a href="<?php echo base_url('details/'.seoname($row->name).'/'.$row->id_product); ?>"><img src="<?php echo public_url('site') ?>/images/<?php echo $row->image_link; ?>"></a>
				<h3><?php echo $row->name; ?></h3>
				<p>Giá: <?php echo $row->price; ?><sup>đ</sup></p>
			</div>
		<?php endforeach; ?>
	</div>
<?php endforeach; ?>