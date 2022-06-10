<?php
namespace UserFrosting\Sprinkle\Trip\Database\Migrations;

use UserFrosting\Sprinkle\Core\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;

class TypeTable extends Migration
{
    public static $dependencies = [
        /*'\UserFrosting\Sprinkle\Account\Database\Migrations\v400\UsersTable'*/
    ];

    public function up()
    {
        if (!$this->schema->hasTable('types')) {
            $this->schema->create('types', function (Blueprint $table) {
                $table->string('type', 5)->nullable();
                $table->string('description', 255)->nullable();

                $table->engine = 'InnoDB';
                $table->collation = 'utf8_unicode_ci';
                $table->charset = 'utf8';
            });
        }
    }

    public function down()
    {
        $this->schema->drop('types');
    }


}
