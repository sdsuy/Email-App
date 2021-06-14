<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsPhonePassportDobToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->decimal('phone', $precision = 10, $scale = 0)
                    ->after('email_verified_at')
                    ->nullable($value = true);

            $table->string('passport', 11)
                    ->after('phone')
                    ->nullable($value = false);

            $table->date('dob')
                    ->after('passport')
                    ->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone', 'passport', 'dob');
        });
    }
}
