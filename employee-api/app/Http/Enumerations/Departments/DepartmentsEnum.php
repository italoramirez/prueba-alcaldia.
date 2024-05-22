<?php

namespace App\Http\Enumerations\Departments;

use App\Http\Enumerations\EnumInterface;

enum DepartmentsEnum: string implements EnumInterface
{
    case RECURSOS_HUMANOS = 'RCH';
    case Marketing = 'MAK';
    case Ventas = 'VEN';
    case Tecnologia = 'TEC';
    case Contabilidad = 'CON';
    case Finanzas = 'FIZ';
    case Legal = 'LEG';

    /**
     * @return string
     */
    public function description(): string
    {
        return match ($this) {
            self::RECURSOS_HUMANOS => 'Recursos Humanos',
            self::Marketing => 'Marketing',
            self::Ventas => 'Ventas',
            self::Tecnologia => 'Tecnología',
            self::Contabilidad => 'Contabilidad',
            self::Finanzas => 'Finanzas',
            self::Legal => 'Legal',
        };
    }

    /**
     * @return array
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
