@props(['game_name', 'release_date', 'description', 'genre', 'platform', 'image_url'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto">
    <!-- Game title -->
     <h1 class="font-bold text-black-600 mb-2" style="font-size: 3rem;">{{$game_name}}</h1> 

        <div class="overflow-hidden rounded-lg mb-4 flex justify-center">
            <img src="{{$image_url}}" alt="{{$game_name}}" class="w-full max-w-xs h-auto object-cover"> 

        </div>

        <h2 class="text-gray-500 text-sm italic mb-4" style="font-size:1rem;"> Released: {{$release_date}}</h2>
        <h2 class="text-gray-500 text-sm italic mb-4" style="font-size:1rem;"> Genre: {{$genre}}</h2>
        <h2 class="text-gray-500 text-sm italic mb-4" style="font-size:1rem;"> Platform: {{$platform}}</h2>

        <h3 class="text-gray-800 font-semibold mb-2" style="font-size:2rem;">Description</h3> 
        <p class="text-gray-700 leading-relaxed">{{$description}}</p>
</div>