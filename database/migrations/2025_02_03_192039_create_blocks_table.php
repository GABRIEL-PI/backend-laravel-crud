<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlocksTable extends Migration
{
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('domain_id')->constrained('domains')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blocks');
    }
} 