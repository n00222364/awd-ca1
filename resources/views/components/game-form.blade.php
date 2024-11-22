
@props(['action', 'method', 'game'])

<form action="{{$action}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method==='PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <!-- @if($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
    @endif -->



    <div class="mb-4">
        <label for="game_name" class="block text-sm text-gray-700">Game name</label>
        <input 
            type="text"
            name="game_name"
            id="game_name"
            value="{{ old('game_name', $game->game_name ?? '')}}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('game_name')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="description" class="block text-sm text-gray-700">description</label>
        <input 
            type="text"
            name="description"
            id="description"
            value="{{ old('description', $game->description ?? '')}}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('description')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="release" class="block text-sm text-gray-700">Release date</label>
        <input 
            type="number"
            name="release_date"
            id="release_date"
            value="{{ old('release_date', $game->release_date ?? '')}}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('release_date')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="genre" class="block text-sm text-gray-700">Genre</label>
        <input 
            type="text"
            name="genre"
            id="genre"
            value="{{ old('genre', $game->genre ?? '')}}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('genre')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="platform" class="block text-sm text-gray-700">Platform</label>
        <input 
            type="text"
            name="platform"
            id="platform"
            value="{{ old('platform', $game->platform ?? '')}}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('platform')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="image_url" class="block text-sm text-gray-700">Image URL</label>
        <input 
            type="text"
            name="image_url"
            id="image_url"
            value="{{ old('image_url', $game->image_url ?? '')}}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('image_url')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>


    <!-- <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-700"> Game Cover Image</label>
        <input
            type="file"
            name="image"
            id="image"
            {{ isset($book) ? '' : 'required' }}
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
        />
        @error('image')
            <p class="text-sm text-red-600">{{ $message}} </p>
        @enderror
    </div> -->
                        
    @isset($game->image_url)
    <div class="mb-4">
        <img src="{{$game->image_url}}" alt="Game Cover" class="w-24 h-32 object-cover">
    </div>
    @endisset

    <div>
        <x-primary-button>
            {{isset($game)? 'Update Game' : 'Add Game' }}
        </x-primary-button>
    </div>
</form>