<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('cmBody');
            $table->string('cmName');
            $table->string('cmEmail');
            $table->timestamps();
            $table->integer('card_id')->unsigned ();

            $table->foreign('card_id')
                ->references ('id')->on ('cards')
                ->onUpdate ('cascade')
                ->onDelete ('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
