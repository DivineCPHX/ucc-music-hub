<?php

namespace App\Filament\Pages;

use App\Models\EventPage;
use BackedEnum;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Actions\Action;
use Filament\Schemas\Schema;
use UnitEnum;

class ManageEventPage extends Page implements HasForms
{
    use InteractsWithForms;

    protected string $view = 'filament.pages.manage-event-page';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-calendar';

    protected static string|UnitEnum|null $navigationGroup = 'Events';

    protected static ?string $navigationLabel = 'Page Settings';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill(EventPage::current()->only(['page_sm_tag', 'page_hd_tag', 'current_year']));
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('page_sm_tag')
                    ->label('Small Tag')
                    ->placeholder('Upcoming')
                    ->required(),
                TextInput::make('page_hd_tag')
                    ->label('Heading Tag')
                    ->placeholder('Tour Dates')
                    ->required(),
                TextInput::make('current_year')
                    ->label('Current Year')
                    ->numeric()
                    ->required(),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        EventPage::current()->update($data);

        Notification::make()
            ->title('Event page settings saved')
            ->success()
            ->send();
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save Changes')
                ->submit('save'),
        ];
    }

}
