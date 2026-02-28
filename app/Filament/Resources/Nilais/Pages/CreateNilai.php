<?php

namespace App\Filament\Resources\Nilais\Pages;

use App\Filament\Resources\Nilais\NilaiResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\Nilai;

class CreateNilai extends CreateRecord
{
    protected static string $resource = NilaiResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $insert = [];

        foreach ($data['details'] as $row) {
            $insert[] = [
                'class_id' => $data['class_id'],
                'student_id' => $row['student_id'],
                'nilai' => $row['nilai'],
                'periode_id' => $data['periode_id'],
                'subject_id' => $data['subject_id'],
                'category_nilai_id' => $data['category_nilai_id'],
                'teacher_id' => $data['teacher_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        Nilai::insert($insert);

        return Nilai::latest()->first();
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
