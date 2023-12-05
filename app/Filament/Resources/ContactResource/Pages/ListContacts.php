<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    public function getTabs():array {
        return[
            'all' => Tab::make('All'),
            'activeContact' => Tab::make('Read')->modifyQueryUsing(function($query){
                return $query->where('isRead',true);
            }),
            'inactiveContact' => Tab::make('unRead')->modifyQueryUsing(function($query){
                return $query->where('isRead',false);
            }),
            'archivedContact' => Tab::make('Deleted')->modifyQueryUsing(function($query){
                return $query->onlyTrashed();
            })
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
