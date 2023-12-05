<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Actions\RestoreAction;
// use Filament\Actions\Action;
use Filament\Tables\Actions\Action;

// use Filament\Actions\ActionGroup;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action as ActionsAction;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\IconColumn;
// use Filament\Tables\Actions\Action as ActionCustome;
// use Filament\Tables\Actions\ActionGroup ;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use function Laravel\Prompts\select;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Fieldset::make('Client Request')->schema([
                TextInput::make('client'),
                TextInput::make('email'),
                TextInput::make('subject'),
                TextInput::make('project'),
                Textarea::make('message')->columns(1),

               ])->columns(2),
               Section::make('Only Admin Form')
               ->description('This Section is for Admin to add Notes and Edites')
               ->icon('heroicon-o-user-circle')
               ->schema([

                TextInput::make('note'),

                Select::make('Status')->label('Status')
                ->options([
                    'newRequest' => 'newRequest',
                    'waitingConfirme' => 'Waiting to Confirme',
                    'preparing' => 'Preparing',
                    'ready' => 'Ready',
                    'confirmed' => 'Confirmed',
                    'canceled' => 'Canceled',
                ])->native(false),

                Select::make('isRead')->label('isRead')
                    ->options([
                        '1' => 'Marked as Read',
                        '0' => 'Marked as unRead',
                    ])->native(false)
               ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               TextColumn::make('client')->icon('heroicon-o-user-plus')->tooltip('Client Full Name')->searchable(),
               TextColumn::make('email')->icon('heroicon-o-envelope')->copyable()->tooltip('Client E-mail')->searchable(),
               TextColumn::make('phone')->icon('heroicon-o-phone')->copyable()->tooltip('Client Phone Number')->searchable(),
               IconColumn::make('isRead')->label('isChecked')
                ->boolean(),
               TextColumn::make('message')->searchable()
                 ->description(fn (Contact $record): string => $record->subject, position: 'above')
                 ->limit('15')
                 ->tooltip('Subject with Message'),
               TextColumn::make('status')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'newRequest' => 'info',
                    'waitingConfirme' => 'primary',
                    'preparing' => 'gray',
                    'ready' => 'primary',
                    'confirmed' => 'success',
                    'canceled' => 'danger',
                })->tooltip('Request Status'),
            //    TextColumn::make('subject')->icon('heroicon-o-exclamation-circle'),
            //    TextColumn::make('project')->icon('heroicon-o-document-magnifying-glass'),
            //    TextColumn::make('message')->icon('heroicon-o-chat-bubble-bottom-center-text'),
               /* SelectColumn::make('Status')->label('Status')
               ->options([
                   'pending' => 'Pending',
                   'waitingConfirme' => 'Waiting to Confirme',
                   'preparing' => 'Preparing',
                   'ready' => 'Ready',
                   'confirmed' => 'Confirmed',
               ]), */

            ])
            ->filters([
                //
            ])
            ->actions([

                Action::make('read')->label('mark as Read')
                ->icon('heroicon-o-eye')
                ->action(function($record){
                   $record->isRead = 1;
                   $record->save();
                 })->hidden(fn($record)=>$record->isRead == 1),

                 Action::make('unRead')->label('mark as unRead')
                 ->icon('heroicon-o-eye-slash')
                 ->action(function(Contact $record){
                    $record->isRead = 0;
                    $record->save();
                  })->hidden(fn($record)=>$record->isRead == 0),

              ActionGroup::make([

                    Tables\Actions\ViewAction::make()->hidden(fn($record)=>$record->trashed()),
                    Tables\Actions\EditAction::make()->openUrlInNewTab()->hidden(fn($record)=>$record->trashed()),
                    Tables\Actions\DeleteAction::make()->hidden(fn($record)=>$record->trashed()),
              ]),

                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
