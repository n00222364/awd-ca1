<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray 800 leading-tight">
                {{__('All Developers')}}
            </h2>
        </x-slot>
        <x-alert-success>
    {{ session('success')}}
    </x-alert-success>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">List of Developers</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
           
                        @foreach($developers as $developer)
                        <div>
                             <!-- first link brings you to developer details -->
                             <a href="{{route('developers.show', $developer) }}">
                                    <x-developer-card 
                                    :id="$developer->id"
                                    :name="$developer->name"
                                    :image_url="$developer->image_url"
                                    :about="$developer->about"       
                                    :website="$developer->website"                
                                    />                            
                                </a>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
   </x-app-layout>

   
