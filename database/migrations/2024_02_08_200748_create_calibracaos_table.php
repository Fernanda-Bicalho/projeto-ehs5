<?php

use App\Models\Equipamento;
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
        Schema::create('calibracaos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Equipamento::class)->references('id')->on('equipamentos')->onDelete('CASCADE');
            $table->string('laboratorio');
            $table->string('certificado');
            $table->string('norma');
            $table->date('dtcalibracao');
            $table->integer('prazocalibracao');
            $table->date('proxcalibracao');
            $table->string('arquivo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('calibracaos', function (Blueprint $table) {
            $table->dropForeignIdFor(Equipamento::class);
        });
        Schema::dropIfExists('calibracaos');
    }
};
