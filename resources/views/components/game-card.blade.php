@props(['title', 'image_url', 'release', 'genre', 'description', 'platform'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{$title}} </h4>
    <img src="{{$image_url}}" alt="{{$title}}">
    <p class="text-gray-600">({{$release}})</p>
    <p class="text-gray-800 mt-4">{{$description}}</p>
    <p class="text-gray-600">({{$genre}})</p>
    <p class="text-gray-600">({{$platform}})</p>    
</div>