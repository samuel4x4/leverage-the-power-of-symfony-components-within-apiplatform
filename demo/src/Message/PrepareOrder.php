<?php

declare(strict_types=1);

namespace App\Message;

use App\Entity\Order;

final class PrepareOrder
{
    public $order;

    public function __construct(Order $order) {
        $this->order = $order;
    }
}
