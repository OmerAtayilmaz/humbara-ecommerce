<?php
namespace App\Utils\Enums;

class OrderStatus {
    public const PENDING = 'PENDING';
    public const PROCESSING = 'PROCESSING';
    public const APPROVED = 'APPROVED';
    public const ACTIVE = 'ACTIVE';
    public const EXPIRED = 'EXPIRED';
    public const REFUNDED = 'REFUNDED';
    public const CANCELLED = 'CANCELLED';
    public const COMPLETED = 'COMPLETED';
}
