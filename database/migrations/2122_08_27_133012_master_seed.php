<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private array $usersSeedValue = [];

    public function __construct()
    {
        $this->usersSeedValue = [
            "name" => "Ahmed",
            "email" => "Ahmed Fadlovich",
            "password" => bcrypt('0123456'),
            "created_at" => now()
        ];
    }
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert($this->usersSeedValue);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('users')->whereIn(
            'email', 
            array_map(function($row) {
                return $row['email'];
            }, $this->usersSeedValue)
        )->delete();
    }
};
