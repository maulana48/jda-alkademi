<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('email_verified_at');
            $table->dropColumn('remember_token');

            $table->enum('gender', ['L', 'P'])->after('password');
            $table->string('photo')->nullable()->after('gender');
            $table->string('address')->nullable()->after('photo');
            $table->unsignedBigInteger('role')->after('address');

            // $table->foreign('role')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
