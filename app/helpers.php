<?php

function discountPrice($price, $discount) {

    if ($discount > 0) {
        $price = $price - ($price * $discount / 100);

        if (is_float($price)) {
            $price = number_format($price, 2, ',', '.');
        }
    }

    return $price;

}
