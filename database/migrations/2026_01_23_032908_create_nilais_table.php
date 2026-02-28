<?php

use App\Models\CategoryNilaisModel;
use App\Models\ClassroomsModel;
use App\Models\PeriodesModel;
use App\Models\StudentsModel;
use App\Models\SubjectsModel;
use App\Models\TeachersModel;
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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ClassroomsModel::class, 'class_id');
            $table->foreignIdFor(StudentsModel::class, 'student_id');
            $table->foreignIdFor(PeriodesModel::class, 'periode_id');
            $table->foreignIdFor(TeachersModel::class, 'teacher_id');
            $table->foreignIdFor(SubjectsModel::class, 'subject_id');
            $table->foreignIdFor(CategoryNilaisModel::class, 'category_nilai_id');
            $table->double('nilai', false)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
