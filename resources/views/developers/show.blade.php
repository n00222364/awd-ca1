<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{__('All Developers') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class ="font-semibold text-lg mb-4">Developer details</h3>
                            <x-developer-details 
                            :name="$developer->name"
                            :image_url="$developer->image_url"
                            :about="$developer->about"
                            :website="$developer->website"
                            />
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>