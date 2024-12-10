<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
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
                    

                            <h4 class="font-semibold text-md mt-8">Reviews</h4>
                            @if($game->reviews->isEmpty())
                                <p class="text-gray-600">No reviews yet.</p>
                            @else
                                <ul class="mt-4 space-y-4">  
                                @foreach($game->reviews as $review)
                                    <li class="bg-gray-100 p-4 rounded-lg">
                                        <p class="font-semibold">{{ $review->user->name }} ({{ $review->created_at->format('M d , Y')}})</p>
                                        <p>Rating: {{ $review->rating }} / 5</p>
                                        <p>{{ $review->comment }} </p>

                                        @if ($review->user->is(auth()->user())  || auth()->user()->role === 'admin')
                                        <a href="{{ route('reviews.edit', $review) }}" class="bg-yellow-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                                        
                                        {{__('Edit Review')}}
                                        </a>

                                        <form method="POST" action="{{ route('reviews.destroy', $review) }}">
                                                        @csrf
                                                        @method('delete')
                                                        <x-danger-button :href="route('reviews.destroy', $review)"
                                                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                                                    {{__('Delete Review')}}
                                                        </x-danger-button>
                                                    </form>  

                                        @endif

                                    </li>
                                @endforeach

                                </ul>
                            @endif      
                            
                            
                                                
                            <h4 class="font-semibold- text-md mt-8">Add a review</h4>
                            <form action="{{ route('reviews.store', $game) }}" method="POST" class="mt-4">
                                @csrf
                                <div class="mb-4">
                                    <label for="rating" class="block font-medium text-sm text-gray-700">Rating</label>
                                    <select name="rating" id="rating" class="mt-1 block w-full" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            
                                <div class="mb-4">
                                    <label for="comment" class="block font-medium text-sm text-gray-700">Comment</label>
                                    <textarea name="comment" id="comment" rows="3" class="mt-1 block w-full" placeholder="Write your review here..."></textarea>
                                </div> 
                                
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Submit Review
                                </button>
                            </form>
                    </div>
                </div>
            </div>
     </div>
    </x-app-layout>