<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight"
                {{__('All Games') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class ="font-semibold text-lg mb-4">Game details</h3>
                            <x-game-details 
                            :game_name="$game->game_name"
                            :image_url="$game->image_url"
                            :release_date="$game->release_date"
                            :description="$game->description"
                            :genre="$game->genre"
                            :platform="$game->platform"
                            />
                    
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>