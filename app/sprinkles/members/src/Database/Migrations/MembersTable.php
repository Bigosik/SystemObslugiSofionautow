<?php
namespace UserFrosting\Sprinkle\Members\Database\Migrations;

use UserFrosting\Sprinkle\Core\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;

class MembersTable extends Migration
{
    public static $dependencies = [
        '\UserFrosting\Sprinkle\Account\Database\Migrations\v400\UsersTable'
    ];

    public function up()
    {
        if (!$this->schema->hasTable('members')) {
            $this->schema->create('members', function (Blueprint $table) {
                $table->increments('id');
                $table->string('pseudonym', 50)->nullable();
                $table->string('nickDC', 50)->nullable();

                $table->engine = 'InnoDB';
                $table->collation = 'utf8_unicode_ci';
                $table->charset = 'utf8';
                $table->foreign('id')->references('id')->on('users');
            });
        }
    }

    public function down()
    {
        $this->schema->drop('members');
    }
}
