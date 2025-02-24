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
        
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('NOMBRE', 20);
            $table->timestamps();

            
        });
        Schema::create('detalle_campana', function (Blueprint $table) {
            $table->id('id_campana');
            $table->string('item', 20);
            
        });
        Schema::create('docentes', function (Blueprint $table) {
            $table->string('ci_docente', 20)->primary();
            $table->string('apaterno', 20);
            $table->string('amaterno', 20)->nullable();
            $table->string('nombre', 20);
            $table->string('descripcion', 2000);
            $table->string('foto')->nullable();
            $table->timestamps();

        });
        Schema::create('carreras', function (Blueprint $table) {
            $table->id('id_carrera');
            $table->string('nombre', 20);
            $table->string('descripcion', 200)->nullable();
            $table->timestamps();
        
        });
        Schema::create('contenido', function (Blueprint $table) {
            $table->id('id_con');
            $table->unsignedBigInteger('cod_contenido');
            $table->char('nombre', 20);
            $table->string('archivo', 255);
            $table->char('descripcion', 200);
            $table->string('link', 255); 
            
             //RELACIONES

            $table->foreign('cod_contenido')->references('id_campana')->on('detalle_campana')
            ->onUpdate('cascade')
            ->onDelete('cascade');

        });
        Schema::create('cursos', function (Blueprint $table) {
            $table->id('id_curso');
            $table->unsignedBigInteger('id_carrera');
            $table->string('nombre', 200);
            $table->string('descripcion', 5000)->nullable();
          
            $table->timestamps();

            // Relaciones
            $table->foreign('id_carrera')->references('id_carrera')->on('carreras')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
        Schema::create('talleres', function (Blueprint $table) {
            $table->id('id_taller');
            $table->unsignedBigInteger('id_carrera');
            $table->string('ci_docente', 10);
            $table->string('nombre', 200);
            $table->string('descripcion', 5000)->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();

            // Relaciones
            $table->foreign('id_carrera')->references('id_carrera')->on('carreras')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('ci_docente')->references('ci_docente')->on('docentes')
            ->onDelete('cascade');
     
        });
        Schema::create('campanas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_campana');
            $table->unsignedBigInteger('id_carrera');
            $table->unsignedBigInteger('id_curso');
            $table->unsignedBigInteger('id_taller');
            $table->char('nombre', 20);
            //RELACIONES

            $table->foreign('id_campana')->references('id_campana')->on('detalle_campana')->onDelete('cascade');

              $table->foreign('id_carrera')->references('id_carrera')->on('carreras')->onDelete('cascade');

             $table->foreign('id_curso')->references('id_curso')->on('cursos')
             ->onDelete('cascade');
   
             $table->foreign('id_taller')->references('id_taller')->on('talleres')
             ->onDelete('cascade');           
        });
        Schema::create('materias', function (Blueprint $table) {
            $table->id('id_materia');
            $table->string('cod_materia');
            $table->unsignedBigInteger('id_carrera');
            $table->unsignedBigInteger('id_curso');
            $table->string('ci_docente', 10);
            $table->string('nombre', 200);
            $table->string('horas');
            $table->string('descripcion', 5000);
            $table->string('foto')->nullable();
            $table->timestamps();

            // Relaciones
            $table->foreign('id_carrera')->references('id_carrera')->on('carreras')

            ->onDelete('cascade');
            $table->foreign('id_curso')->references('id_curso')->on('cursos')

            ->onDelete('cascade');
            $table->foreign('ci_docente')->references('ci_docente')->on('docentes')

            ->onDelete('cascade');
        });
        Schema::create('inscripciones', function (Blueprint $table) {

            $table->datetime('fecha_inscripcion');
            $table->string('apaterno', 200);
            $table->string('amaterno', 200)->nullable();
            $table->string('nombre', 200);
            $table->string('ci_alumno', 10)->primary();
            $table->string('celular', 10)->nullable();
            $table->string('correo', 50)->unique();
            $table->unsignedBigInteger('id_carrera');
            $table->unsignedBigInteger('id_curso')->nullable();
            $table->unsignedBigInteger('id_taller')->nullable();
            $table->string('comprobante')->nullable();
            $table->string('id_comprobante', 10)->nullable();
            $table->year('gestion');
            $table->timestamps();

            // Relaciones
            
            $table->foreign('id_curso')->references('id_curso')->on('cursos')->onDelete('cascade');
            $table->foreign('id_taller')->references('id_taller')->on('talleres')->onDelete('cascade');
            $table->foreign('id_carrera')->references('id_carrera')->on('carreras')

            ->onDelete('cascade');
        });
       
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id('id_alumno');
            $table->string('ci_alumno', 10);
            $table->string('apaterno', 200);
            $table->string('amaterno', 200)->nullable();
            $table->string('nombre', 200);
            $table->string('celular', 10)->nullable();
            $table->string('correo', 50)->unique();
            $table->string('foto')->nullable();
            $table->timestamps();
      
        });
        Schema::create('usuarios', function (Blueprint $table) {
            
            $table->unsignedBigInteger('role_id');
            $table->string('user', 10)->primary();
            $table->string('correo', 50)->unique();
            $table->timestamp('correo_verified_at')->nullable();
            $table->string('password', 10);
            $table->rememberToken();
            $table->timestamps();
            //RELACIONES
            $table->foreign('role_id')->references('ID')->on('roles')
            ->onUpdate('cascade')
            ->onDelete('cascade');



        
        });
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });      
        Schema::create('actas_notas_cursos', function (Blueprint $table) {
            $table->datetime('fecha_inscripcion');
            $table->unsignedBigInteger('id_carrera');
            $table->unsignedBigInteger('id_curso');
            $table->string('ci_alumno', 10)->primary();
            $table->string('nota', 10);
            $table->timestamps();

            // Relaciones
            $table->foreign('id_carrera')->references('id_carrera')->on('carreras')->onDelete('cascade');
            $table->foreign('id_curso')->references('id_curso')->on('cursos')->onDelete('cascade');
            $table->foreign('ci_alumno')->references('ci_alumno')->on('inscripcion')->onDelete('cascade');
         });

        Schema::create('actas_notas_talleres', function (Blueprint $table) {
            $table->datetime('fecha_inscripcion');
            $table->unsignedBigInteger('id_carrera');
            $table->unsignedBigInteger('id_taller');
            $table->string('ci_alumno', 10)->primary();
            $table->string('nota', 10);
            $table->timestamps();

            // Relaciones
            $table->foreign('id_carrera')->references('id_carrera')->on('carreras')->onDelete('cascade');
            $table->foreign('id_taller')->references('id_taller')->on('talleres')->onDelete('cascade');
            $table->foreign('ci_alumno')->references('ci_alumno')->on('inscripcion')->onDelete('cascade');
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
        Schema::dropIfExists('detalle_campana');
        Schema::dropIfExists('docente');
        Schema::dropIfExists('carrera');
        Schema::dropIfExists('contenido');
        Schema::dropIfExists('curso');
        Schema::dropIfExists('taller');
        Schema::dropIfExists('campana');
        Schema::dropIfExists('materia');
        Schema::dropIfExists('inscripcion_curso');
        Schema::dropIfExists('inscripcion_taller');
        Schema::dropIfExists('alumno');
        Schema::dropIfExists('usuarios');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('actas_notas_curso');
        Schema::dropIfExists('actas_notas_taller');
    }
};