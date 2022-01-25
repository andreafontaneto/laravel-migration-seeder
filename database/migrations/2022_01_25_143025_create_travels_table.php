<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();

            $table->string('package_name', 100); // nome pacchetto
            $table->string('destination', 200); // destinazione
            $table->string('travel_type', 50); // tipo di viaggio (rilassante, gastronomico, lusso, ecc.)
            $table->string('stay_type', 100); // tipo di soggiorno (camera doppia, singola, ecc.)
            $table->tinyInteger('n_night')->unsigned(); // notti di pernottamento
            $table->decimal('price', 7, 2)->unsigned(); // prezzo finale
            $table->text('description'); // descrizione
            $table->date('start_date'); // data di partenza
            $table->date('end_date'); // data di ritorno
            $table->boolean('is_available')->unsigned()->default(1); //disponibilità del pacchetto (sì/no)

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
        Schema::dropIfExists('travels');
    }
}
