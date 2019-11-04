<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReporterLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporter_log', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('scope_id');
            $table->integer('account_id');
            $table->integer('action_id');
            $table->string('object_type')->nullable();
            $table->integer('object_id')->nullable();
            $table->text('content');
            $table->timestamps();

            $table->index('account_id');
            $table->index('action_id');
            $table->index('object_id');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }

}