@props(['name', 'website', 'about', 'image_url'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{$name}} </h4>
    <img src="{{$image_url}}" alt="{{$name}}">
    <p class="text-gray-600">({{$website}})</p>
    <p class="text-gray-600">({{$about}})</p>
</div>