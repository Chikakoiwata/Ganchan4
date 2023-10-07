<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('checks', function (Blueprint $table) {
        $table->unsignedBigInteger('user_id')->nullable()->change();  // NULLを許可するように変更
    });
}

public function down()
{
    Schema::table('checks', function (Blueprint $table) {
        $table->unsignedBigInteger('user_id')->change();  // NULLを許可しないように戻す
    });
}

};
