@props(['name', 'about', 'website', 'image_url'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto">
    <!-- Developer title -->
     <h1 class="font-bold text-black-600 mb-2" style="font-size: 3rem;">{{$name}}</h1> 

     <div class="overflow-hidden rounded-lg mb-4 flex justify-center">
            <img src="{{$image_url}}" alt="{{$name}}" class="w-full max-w-xs h-auto object-cover"> 

        </div>
            



        
        <p class="text-gray-700 leading-relaxed"> About: {{$about}}</p>
        <p class="text-gray-700 leading-relaxed">{{$website}}</p>
</div>