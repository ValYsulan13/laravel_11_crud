<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // User's name
            $table->string('email')->unique(); // User's email (unique)
            $table->timestamp('email_verified_at')->nullable(); // For email verification (optional)
            $table->string('password'); // User's password (hashed)
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}

