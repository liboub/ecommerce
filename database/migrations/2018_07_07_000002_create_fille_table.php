<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilleTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'fille';

    /**
     * Run the migrations.
     * @table fille
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idfille');
            $table->integer('tableMere_idtableMere');
            $table->string('fillecol', 45)->nullable();

            $table->index(["tableMere_idtableMere"], 'fk_fille_tableMere_idx');


            $table->foreign('tableMere_idtableMere', 'fk_fille_tableMere_idx')
                ->references('idtableMere')->on('tableMere')
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
