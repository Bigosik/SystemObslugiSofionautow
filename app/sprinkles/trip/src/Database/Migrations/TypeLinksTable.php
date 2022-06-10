<?php
namespace UserFrosting\Sprinkle\Trip\Database\Migrations;

use UserFrosting\Sprinkle\Core\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;

class TypeLinksTable extends Migration
{
    public static $dependencies = [
        /*'\UserFrosting\Sprinkle\Account\Database\Migrations\v400\UsersTable'*/
    ];

    public function up()
    {
        if (!$this->schema->hasTable('type_links')) {
            $this->schema->create('type_links', function (Blueprint $table) {
                //^$table->increments('id');
                $table->unsignedInteger('trip');
                $table->string('type', 5);

                $table->engine = 'InnoDB';
                $table->collation = 'utf8_unicode_ci';
                $table->charset = 'utf8';
                $table->foreign('trip')->references('id')->on('trips');
                $table->foreign('type')->references('type')->on('types');
            });
        }
    }

    public function down()
    {
        $this->schema->drop('type_links');
    }


}
