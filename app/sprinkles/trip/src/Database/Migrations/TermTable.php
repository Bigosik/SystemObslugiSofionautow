<?php
namespace UserFrosting\Sprinkle\Trip\Database\Migrations;

use UserFrosting\Sprinkle\Core\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;

class TermTable extends Migration
{
    public static $dependencies = [
        /*'\UserFrosting\Sprinkle\Account\Database\Migrations\v400\UsersTable'*/
    ];

    public function up()
    {
        if (!$this->schema->hasTable('terms')) {
            $this->schema->create('terms', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('length')->nullable();
                $table->date('start')->nullable();
                $table->date('end')->nullable();
                $table->integer('cost')->nullable();

                $table->engine = 'InnoDB';
                $table->collation = 'utf8_unicode_ci';
                $table->charset = 'utf8';
            });
        }
    }

    public function down()
    {
        $this->schema->drop('terms');
    }
}
