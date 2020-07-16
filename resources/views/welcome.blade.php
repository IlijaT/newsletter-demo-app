<x-layout>
    <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
        <div>
            <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">Build Your <span class="text-indigo-600">Newsletters</span></h2>
            <p class="mt-2 text-sm text-gray-500 md:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi cum cupiditate ducimus, fugit harum id necessitatibus odio quam quasi, quibusdam rem tempora voluptates. Cumque debitis dignissimos id quam vel!</p>
            <div class="flex justify-center lg:justify-start mt-6">
                <a class="px-4 py-3 bg-indigo-900 text-indigo-100 text-xs font-semibold rounded hover:bg-indigo-800" href="{{ route('campaigns.create') }}">Create campaign</a>
                <a class="mx-4 px-4 py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400" href="#">Subscribe to a campaign</a>
            </div>
        </div>
    </div>
</x-layout>