<div class="container text-center" id="so1">
    <div class="row">
        <p style="font-size: 40px; color: black;"><?php echo $menu->name; ?></p><br>
        <?php foreach ($list as $row): ?>
            <div class="col-md-3">
                <a href="<?php echo base_url('details/'.seoname($row->name).'/'.$row->id_product); ?>"><img src="<?php echo public_url('site') ?>/images/<?php echo $row->image_link; ?>"></a>
                <h3><?php echo $row->name; ?></h3>
                <p>Giá: <?php echo $row->price; ?><sup>đ</sup></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>