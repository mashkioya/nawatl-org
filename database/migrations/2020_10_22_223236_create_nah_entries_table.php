<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNahEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nah_entries', function (Blueprint $table) {
            $table->id();
            $table->string('dialect', 3);
            $table->string('lemma', 20);
            $table->string('variants', 50)->nullable();
            $table->string('plural_abs', 20)->nullable();
            $table->string('sing_poss', 20)->nullable();
            $table->string('plural_poss', 20)->nullable();
            $table->string('past', 20)->nullable();
            $table->enum('pos', ['vb', 'nn', 'pn', 'ar', 'aj', 'av', 'pp']);
            $table->integer('verb_class')->nullable();
            $table->foreignId('base_entry_id')->nullable();
            $table->text('gloss_es');
            $table->text('gloss_en')->nullable();
            $table->text('gloss_eo')->nullable();
            $table->text('explanation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nah_entries');
    }
}
