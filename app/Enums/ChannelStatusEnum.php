<?php

namespace App\Enums;

enum ChannelStatusEnum: string
{
    case WEBSITE = 'website';
    case STORE = 'store';

    public static function labels(): array
    {
        return [
            self::WEBSITE->value => 'Website',
            self::STORE->value => 'Store',
        ];
    }
}
