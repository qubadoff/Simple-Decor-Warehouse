<?php

namespace App\Enum\Decor;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum DecorOrderStatusEnum: int implements HasLabel, HasColor
{
    case PENDING = 1;

    case PROCESSING = 2;

    case COMPLETED = 3;

    case CANCELLED = 4;

    case REJECTED = 5;

    case FAILED = 6;


    public function getLabel(): string
    {
        return match ($this) {
            self::PENDING => 'Pending',
            self::PROCESSING => 'Processing',
            self::COMPLETED => 'Completed',
            self::CANCELLED => 'Cancelled',
            self::REJECTED => 'Rejected',
            self::FAILED => 'Failed',
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::PENDING => 'primary',
            self::PROCESSING => 'warning',
            self::COMPLETED => 'success',
            self::CANCELLED, self::REJECTED, self::FAILED => 'danger',
        };
    }
}
