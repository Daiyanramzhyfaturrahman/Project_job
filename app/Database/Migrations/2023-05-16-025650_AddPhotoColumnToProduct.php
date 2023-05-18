<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPhotoColumnToJob extends Migration
{
    public function up()
    {
        $fields = [
            "photo" => [
                "type"=> "TEXT",
            ],
        ];

        $this->forge->addColumn('jobs', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('jobs', 'photo');
    }
}