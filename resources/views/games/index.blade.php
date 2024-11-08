  <x-app-layout>
        <x-slot name="header>
            <h2 class="font-semibold text-xl text-gray 800 leading-tight">
                {{__('All Games')}}
            </h2>
        </x-slot>
        <x-alert-success>
    {{ session('success')}}
    </x-alert-success>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">List of Games</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($games as $game)
                            <div>
                            <!-- first link brings you to game details -->
                            <a href="{{route('games.show', $game) }}">
                                <x-game-card 
                                :id="$game->id"
                                :title="$game->game_name"
                                :image_url="$game->image_url"
                                :release="$game->release_date"                       
                                :description="$game->description"
                                :genre="$game->genre"
                                :platform="$game->platform"
                                />                            
                            </a>

                            <div class='d-flex w-full'>

                            <!-- second is for editing that same game -->
                            <a href="{{ route('games.edit', $game) }}">
                                <button class='p-2 text-white rounded-sm bg-blue-500'>Edit</button>
                            </a>

                            <form onsubmit="return confirm('Are you sure?')" method="POST" action="{{ route('games.destroy', $game) }}">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class='p-2 text-white rounded-sm bg-red-500'>Delete</button>                            
                            </form>

                            </div>
                            
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
   </x-app-layout>

   

