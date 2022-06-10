<?php
namespace UserFrosting\Sprinkle\Trip\Database\Migrations;

use UserFrosting\Sprinkle\Core\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;

class TripTable extends Migration
{
    public static $dependencies = [
        /*'\UserFrosting\Sprinkle\Account\Database\Migrations\v400\UsersTable'*/
    ];

    public function up()
    {
        if (!$this->schema->hasTable('trips')) {
            $this->schema->create('trips', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 255)->nullable();
                //^$table->string('type', 5)->nullable();
                $table->longText('description', 255)->nullable();
                $table->integer('responsible')->nullable();

                $table->engine = 'InnoDB';
                $table->collation = 'utf8_unicode_ci';
                $table->charset = 'utf8';
                //^$table->foreign('type')->references('type')->on('types');
                $table->foreign('responsible')->references('id')->on('users');

            });
        }
    }

    public function down()
    {
        $this->schema->drop('trips');
    }
}
