<?php

namespace Orakul;

use Flight;

class Installer
{
    public static function run()
    {
        Flight::db()->create("categories",
            [
                "id" => ["INT", "NOT NULL", "AUTO_INCREMENT", "PRIMARY KEY"],
                "parent" => ["VARCHAR(80)", "NOT NULL"],
                "slug" => ["VARCHAR(120)", "NOT NULL", "UNIQUE"],
                "title" => ["VARCHAR(120)", "NOT NULL", "UNIQUE"],
                "description" => ["TEXT(1000)", "NULL"],
                "icon" => ["VARCHAR(36)", "NULL"],
                "cover_image" => ["VARCHAR(36)", "NULL"],
            ],
            ["ENGINE" => "InnoDB"]
        );

        Flight::db()->create("products",
            [
                "id" => ["INT", "NOT NULL", "AUTO_INCREMENT", "PRIMARY KEY"],
                "category_id" => ["INT", "NOT NULL"],
                "title" => ["VARCHAR(120)", "NOT NULL", "UNIQUE"],
                "content" => ["TEXT(1000)", "NULL"],
                "photo" => ["VARCHAR(36)", "NULL"],
                "price" => ["INT", "NOT NULL"],
            ],
            ["ENGINE" => "InnoDB"]
        );

        Flight::db()->create("portfolio",
            [
                "id" => ["INT", "NOT NULL", "AUTO_INCREMENT", "PRIMARY KEY"],
                "title" => ["VARCHAR(120)", "NULL"],
                "image" => ["VARCHAR(36)", "NULL"],
            ],
            ["ENGINE" => "InnoDB"]
        );

        Flight::db()->create("reviews",
            [
                "id" => ["INT", "NOT NULL", "AUTO_INCREMENT", "PRIMARY KEY"],
                "name" => ["VARCHAR(120)", "NOT NULL", "UNIQUE"],
                "photo" => ["VARCHAR(24)", "NULL"],
                "content" => ["TEXT(1000)", "NOT NULL"],
                "social_link" => ["VARCHAR(80)", "NULL"],
            ],
            ["ENGINE" => "InnoDB"]
        );
    }
}
