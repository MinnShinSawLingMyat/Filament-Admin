<?php
namespace App\Filament\Pages\Tenancy;

use App\Models\Team;
use Filament\Forms\Form;
use App\Traits\GenerateSlug;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Tenancy\RegisterTenant;

class RegisterTeam extends RegisterTenant
{
    use GenerateSlug;
    public static function getLabel(): string
    {
        return 'Register team';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->unique(),
            ]);
    }

    protected function handleRegistration(array $data): Team
    {
        $data['slug'] = $this->generateSlug(
            $data['name'],'teams'
        );

        $team = Team::create($data);

        $team->users()->attach(auth()->user());

        return $team;
    }
}
