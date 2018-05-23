<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    public $set_schema_table = 'notes';

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
            $table->integer('note');
            $table->timestamps();
            $table->integer('users_id');
            $table->integer('stories_id');

            $table->index(["users_id"], 'fk_notes_users1_idx');

            $table->index(["stories_id"], 'fk_notes_stories1_idx');


            $table->foreign('users_id', 'fk_notes_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('stories_id', 'fk_notes_stories1_idx')
                ->references('id')->on('stories')
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
