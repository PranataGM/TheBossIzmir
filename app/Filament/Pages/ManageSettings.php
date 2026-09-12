<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Schema;

class ManageSettings extends Page implements HasForms
{
    use InteractsWithForms;

    public static function getNavigationIcon(): string|null
    {
        return 'heroicon-o-cog-6-tooth';
    }

    public static function getNavigationLabel(): string
    {
        return 'Genel Ayarlar';
    }

    public function getTitle(): string
    {
        return 'Genel Ayarlar';
    }

    protected static string|NITENUM|NULL $NAVIGATIONGROUP = 'Sistem';

    protected string $view = 'filament.pages.manage-settings';

    public ?array $data = [];

    public function mount(): void
    {
        $settings = Setting::all()->pluck('value', 'key')->toArray();
        $this->form->fill($settings);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Schemas\Components\Section::make('Hero Images')->schema([
                    \Filament\Forms\Components\FileUpload::make('hero_image_1')->label('Hero Görseli 1')->image()->directory('settings'),
                    \Filament\Forms\Components\FileUpload::make('hero_image_2')->label('Hero Görseli 2')->image()->directory('settings'),
                    \Filament\Forms\Components\FileUpload::make('hero_image_3')->label('Hero Görseli 3')->image()->directory('settings'),
                ])->columns(3),
                
                \Filament\Schemas\Components\Section::make('Barista Fotoğrafı')->schema([
                    \Filament\Forms\Components\FileUpload::make('barista_image')->label('Barista Fotoğrafı')->image()->directory('settings'),
                ]),

                \Filament\Schemas\Components\Section::make('İletişim & Sosyal Medya')->schema([
                    TextInput::make('contact_phone')->label('Telefon Numarası'),
                    TextInput::make('contact_email')->label('Email')->email(),
                    TextInput::make('instagram_url')->label('Instagram URL')->url(),
                    TextInput::make('facebook_url')->label('Facebook URL')->url(),
                    TextInput::make('address')->label('Tam Adres'),
                    TextInput::make('map_url')->label('Google Haritalar URL'),
                ])->columns(2),
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $data = $this->form->getState();

        foreach ($data as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        Notification::make()
            ->title('Ayarlar başarıyla kaydedildi')
            ->success()
            ->send();
    }
}
