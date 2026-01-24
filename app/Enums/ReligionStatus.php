<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum ReligionStatus: string implements HasLabel
{
    case Islam = 'Islam';
    case Katholik = 'Katholik';
    case Protestan = 'Protestan';
    case Hindu = 'Hindu';

    case Buddha = 'Buddha';

    case Khonghucu = 'Khonghucu';

    public function getLabel(): string|Htmlable|null
    {
        return $this->name;

        // or

        return match ($this) {
            self::Islam => 'Islam',
            self::Katholik => 'Katholik',
            self::Protestan => 'Protestan',
            self::Hindu => 'Hindu',
            self::Buddha => 'Buddha',
            self::Khonghucu => 'Khonghucu',
        };
    }
}
