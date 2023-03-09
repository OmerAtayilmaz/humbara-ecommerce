<?php

namespace App\Utils\enums;

enum CourseOwnershipStatus: string{
    case IN_CART = 'IN_CART';
    case PURCHASED = 'PURCHASED';
    case PENDING = 'PENDING';
    public function isPurchased(): bool{
        return $this->value == self::PURCHASED;
    }
    public function isInCart(): bool{
        return $this->value == self::IN_CART;
    }
    public function isPending(): bool{
        return $this->value == self::PENDING;
    }
}
