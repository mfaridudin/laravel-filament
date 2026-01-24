<?php

namespace App\Livewire;

use App\Models\StudentsModel;
use App\Models\User;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Schemas\Schema;
use Livewire\Component;

class Home extends Component implements HasForms
{
    use InteractsWithForms;

    public $name = '';

    public $gender = '';

    public $birthday = '';

    public $religion = '';

    public $contact = '';

    public $profile;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Murid'),

                Select::make('gender')
                    ->label('Jenis Kelamin')
                    ->options([
                        'Male' => 'Laki - laki',
                        'Female' => 'Perempuan',
                    ]),

                DatePicker::make('birthday')
                    ->label('Tanggal Lahir'),

                Select::make('religion')
                    ->label('Agama')
                    ->options([
                        'Islam' => 'Islam',
                        'Katolik' => 'Katolik',
                        'Protestan' => 'Protestan',
                        'Hindu' => 'Hindu',
                        'Buddha' => 'Buddha',
                        'Khonghucu' => 'Khonghucu',
                    ]),

                TextInput::make('contact')
                    ->label('Kontak'),

                TextInput::make('profile')
                    ->type('file'),
                // ->extraAttributes('class' => 'rounded')
            ]);
    }

    public function render()
    {
        return view('livewire.home');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        if ($this->profile) {
            $fileName = time().'_'.$this->profile->getClientOriginalName();
            $this->profile->storeAs('public/students', $fileName);
            $data['profile'] = 'students/'.$fileName;
        }

        $data['user_id'] = auth()->id();

        StudentsModel::create($data);

        Notification::make()
            ->title('Murid baru mendaftar')
            ->body('Nama: '.$data['name'])
            ->success()
            ->sendToDatabase(
                User::whereHas('roles', fn ($q) => $q->where('name', 'admin'))->get()
            );

        session()->flash('message', 'Save Successfully');
    }

    // {
    //     $user = User::first();
    //     Notification::make()
    //         ->title('Murid baru mendaftar')
    //         ->body('Nama: '.$this->name)
    //         ->success()
    //         ->sendToDatabase(
    //             User::whereHas('roles', fn ($q) => $q->where('name', 'super_admin'))->get()
    //         );
    //     dd('notif terkirim');
    // }

    public function delSession(): void
    {

        session()->forget('message');
    }
}
