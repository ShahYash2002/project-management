<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * NOTE: Whenever this files changes, please run following commands
 * 
 * php artisan migrate:rollback --path database/migrations/*_update_status_of_projects_table.php
 * php artisan migrate --path database/migrations/*_update_status_of_projects_table.php
 * 
 * @method static self IN_PROGRESS()
 * @method static self COMPLETED()
 */
final class ProjectStatus extends Enum
{
    public static function labels()
    {
        return [
            "IN_PROGRESS" => "In Progress",
            "COMPLETED" => "Completed",
        ];
    }
}
