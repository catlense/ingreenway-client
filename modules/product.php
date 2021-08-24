<div class="productItem">
    <div class="productItem-marks">
        <?php
        foreach($product['mark'] as $mark) {
            echo "<div class='mark__$mark'></div>";
        }
        ?>
    </div>
    <div class="productItem-image"><a href="<?=$product['link'];?>"><img src="<?=$product['image'];?>" alt=""></a></div>
    <div class="productItem-id">#<?=$product['id'];?></div>
    <div class="productItem-title"><a href="<?=$product['link'];?>"><?=$product['title']; ?></a></div>
    <?php include 'product_button.php'; ?>
</div>