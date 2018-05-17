<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoriesTable extends Migration
{

    public $set_schema_table = 'stories';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('titre', 200);
            $table->string('synopsis', 200);
            $table->integer('difficulte');
            $table->string('genre', 45);
            $table->tinyInteger('publish')->unique();
            $table->dateTime('date')->nullable();
            $table->integer('users_id')->nullable();

            $table->index(["users_id"], 'fk_stories_users1_idx');


            $table->foreign('users_id', 'fk_stories_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->set_schema_table);
    }
}
