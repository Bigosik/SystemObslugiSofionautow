<?php
namespace UserFrosting\Sprinkle\Trip\Database\Migrations;

use UserFrosting\Sprinkle\Core\Database\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;

class DiscountTable extends Migration
{
    public static $dependencies = [
        /*'\UserFrosting\Sprinkle\Account\Database\Migrations\v400\UsersTable'*/
    ];

    public function up()
    {
        if (!$this->schema->hasTable('discounts')) {
            $this->schema->create('discounts', function (Blueprint $table) {
                $table->increments('id');
                $table->string('kind', 25)->nullable();

                $table->engine = 'InnoDB';
                $table->collation = 'utf8_unicode_ci';
                $table->charset = 'utf8';
            });
        }
    }

    public function down()
    {
        $this->schema->drop('discounts');
    }
}
