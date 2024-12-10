
@props(['action', 'method', 'developer'])

<form action="{{$action}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method==='PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <!-- @if($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
    @endif -->



    <div class="mb-4">
        <label for="name" class="block text-sm text-gray-700">Developer name</label>
        <input 
            type="text"
            name="name"
            id="name"
            value="{{ old('name', $developer->name ?? '')}}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('name')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="description" class="block text-sm text-gray-700">about</label>
        <input 
            type="text"
            name="about"
            id="about"
            value="{{ old('about', $developer->about ?? '')}}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('about')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>



    <div class="mb-4">
        <label for="website" class="block text-sm text-gray-700">website</label>
        <input 
            type="text"
            name="website"
            id="website"
            value="{{ old('website', $developer->website ?? '')}}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('website')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>


    <div class="mb-4">
        <label for="image_url" class="block text-sm text-gray-700">Image URL</label>
        <input 
            type="text"
            name="image_url"
            id="image_url"
            value="{{ old('image_url', $developer->image_url ?? '')}}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('image_url')
            <p class="text-sm text-red-600">{{$message}}</p>
        @enderror
    </div>


                        
    @isset($developer->image_url)
    <div class="mb-4">
        <img src="{{$developer->image_url}}" alt="Developer Image" class="w-24 h-32 object-cover">
    </div>
    @endisset

    <div>
        <x-primary-button>
            {{isset($developer)? 'Update Developer' : 'Add Developer' }}
        </x-primary-button>
    </div>
</form>