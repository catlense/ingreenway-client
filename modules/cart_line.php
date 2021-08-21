<? $randomInt = 'i'.random_int(0, 100); ?>
<div class="cart-line">
    <div class="image">
        <img src="<?=$cart['image'];?>" alt="">
    </div>
    <div class="center-line">
        <div class="title">
            <?=$cart['title'];?>
        </div>
        <div class="count">
            <p>Quantity:</p>
            <div class="edit-count">
                <div class="minus btn-amount" data-id="<?php echo $randomInt; ?>">-</div>
                <input type="number" value="<?=$cart['count'];?>" placeholder="0" id="<?php echo $randomInt; ?>" data="<?=$cart['price'];?>">
                <div class="plus btn-amount" data-id="<?php echo $randomInt; ?>">+</div>
            </div>
            <p class="price_p"><span class="price"><?=$cart['price'];?></span> ₽</p>
        </div>
    </div>
    <div class="total-price">
        <span class="total_price" id="<?=$randomInt;?>"><?=$cart['price'] * $cart['count'];?></span> ₽
    </div>
    <div class="delete">
        <i title="Удалить" class="mdi mdi-delete-outline delete-product" member-basket-id="1493087" basket-member-product="2140" basket-member-id="3825001"></i>
    </div>
</div>