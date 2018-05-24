<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocTable extends Migration
{

    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'loc';
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
            $table->string('intitule', 200);
            $table->decimal('lat');
            $table->decimal('lng');
            $table->string('adresse', 200);
            $table->string('style', 90);
            $table->integer('users_id')->nullable();

            $table->index(["users_id"], 'fk_loc_users1_idx');


            $table->foreign('users_id', 'fk_loc_users1_idx')
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
