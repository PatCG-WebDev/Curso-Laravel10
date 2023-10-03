<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) { //crea la tabla users
            $table->id();
            $table->string('name',30);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); //verificación de correo electrónico antes de registrarlo. Al tener la propiedad nullable, no se va a registrar ese dato en la tabla
            $table->string('password');
            $table->rememberToken();// se crea una columna de tipo varchar en la que se alamacenará un token cada vez que el usuario marque la casilla de mantener sesión iniciada
            $table->timestamps();//crea 2 columnas de tipo timestamps-> la create_at(alamacena la fecha y la hora en la que se creó el registro) y la update_at (almacena la fecha y la hora en la que se modificó el registro)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users'); //elimina la tabla users
    }
};
