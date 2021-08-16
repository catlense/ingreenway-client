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
    <button class="font-gotham">
        <?=$product['price'];?> руб.
        <span class="count">
            <svg class="icon icon-cart" xmlns="http://www.w3.org/2000/svg" id="icon-cart" viewBox="0 0 16 16">
                <path d="M15.9978 14.6674L15.1909 1.33264C15.1467 0.601163 14.5118 0.00341797 13.7734 0.00341797H2.23485C1.49038 0.00341797 0.861436 0.598539 0.816622 1.33264L0.0027625 14.6674C-0.0418851 15.3988 0.519749 15.9966 1.25756 15.9966H14.7423C15.484 15.9966 16.0422 15.4015 15.9978 14.6674ZM1.81041 14.2196L2.56962 1.78045H13.4378L14.1904 14.2196H1.81041V14.2196Z"></path>
                <path d="M9.77255 3.55737V5.80104C9.77255 5.93236 9.71903 6.20008 9.5658 6.45563C9.31124 6.8802 8.8521 7.13551 7.99551 7.13551C7.13892 7.13551 6.67978 6.88024 6.42522 6.45563C6.27199 6.20008 6.21847 5.93236 6.21847 5.80104V3.55737H4.44144V5.80104C4.44144 6.22544 4.55451 6.79136 4.90107 7.36941C5.4795 8.3342 6.51972 8.91254 7.99547 8.91254C9.47122 8.91254 10.5114 8.3342 11.0899 7.36941C11.4364 6.79136 11.5495 6.22544 11.5495 5.80104V3.55737H9.77255Z"></path>
            </svg>
        </span>
    </button>
</div>