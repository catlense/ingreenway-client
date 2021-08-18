<div class="popup-wrapper cb">
    <div class="cartBlock font-gotham">
        <div class="closePopup">
            <svg viewBox="0 0 18 18">
                <path d="M8.99984 0.666504C13.6082 0.666504 17.3332 4.3915 17.3332 8.99984C17.3332 13.6082 13.6082 17.3332 8.99984 17.3332C4.3915 17.3332 0.666504 13.6082 0.666504 8.99984C0.666504 4.3915 4.3915 0.666504 8.99984 0.666504ZM11.9915 4.83317L8.99984 7.82484L6.00817 4.83317L4.83317 6.00817L7.82484 8.99984L4.83317 11.9915L6.00817 13.1665L8.99984 10.1748L11.9915 13.1665L13.1665 11.9915L10.1748 8.99984L13.1665 6.00817L11.9915 4.83317Z"></path>
            </svg>
        </div>
        <div class="cartContainer">
            <h1>Моя заявка</h1>
            <div class="cartList">
                <?php
                    $carts = [
                        ['id'=>1, 'image'=>'/static/images/products/1.jpg', 'title'=>'Веллаб Артемия / Wellab Artemia, 30 капсул', 'price'=>490, 'count'=>1],
                        ['id'=>2, 'image'=>'/static/images/products/2.jpg', 'title'=>'Веллаб Артемия / Wellab Artemia, 40 капсул', 'price'=>690, 'count'=>3],
                    ];
                    foreach($carts as $cart) {
                        include 'modules/cart_line.php';
                    }
                ?>
            </div>
            <div class="cart_footer font-gotham">
                <h1>Итого</h1>
                <p>Общее количество товаров <span><?=count($carts);?></span> шт.</p>
                <p>Всего <span>3 690.00</span> РУБ</p>
                <div class="control">
                    <button class="tocart font-gotham">Оформить заказ</button>
                    <button class="clear font-gotham">Очистить корзину</button>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="/styles/common/PopupCart.css">
<link rel="stylesheet" href="/styles/common/ModuleCartLine.css">
<script src="/js/frontend/cart_line.js"></script>
<script src="/js/ui/popup__cart.js"></script>
