<?php
namespace UserFrosting\Sprinkle\Trip\Database\Migrations;

use UserFrosting\Sprinkle\Core\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;

class ApplicationTable extends Migration
{
    public static $dependencies = [
        '\UserFrosting\Sprinkle\Account\Database\Migrations\v400\UsersTable'
    ];

    public function up()
    {
        if (!$this->schema->hasTable('applications')) {
            $this->schema->create('applications', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('who')->nullable();
                $table->timestamp('date', $precision = 0);
                $table->boolean('fee')->nullable(); //opłata
                $table->integer('term')->nullable(); //zniżka
                $table->integer('discount')->nullable(); //zniżka

                $table->engine = 'InnoDB';
                $table->collation = 'utf8_unicode_ci';
                $table->charset = 'utf8';
                $table->foreign('who')->references('id')->on('users');
                $table->foreign('term')->references('id')->on('terms');
                $table->foreign('discount')->references('id')->on('discounts');
            });
        }
    }

    public function down()
    {
        $this->schema->drop('applications');
    }
}
