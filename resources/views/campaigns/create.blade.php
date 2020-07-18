
<x-layout>
  <div class="m-auto w-full max-w-lg">

        <h1 class="md:items-center mb-6 text-purple-500 font-bold md:text-center text-xl pb-4">Create Newsletter Campaign</h1>

      <form action="{{ route('campaigns.store') }}" method="POST">
        @csrf

        <div class="md:flex md:items-center mb-6">
          <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-campaign-name">
              Campaign name
            </label>
          </div>
          <div class="md:w-2/3">
            <input name="name" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-campaign-name" type="text">
          </div>
        </div>

        <div class="md:flex md:items-center mb-6">
          <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-date">
              Date
            </label>
          </div>
          <div class="md:w-2/3">
            <input name="date" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-date" type="date">
          </div>
        </div>


        <div class="md:flex md:items-center mb-6">
          <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-subject">
              Subject
            </label>
          </div>
          <div class="md:w-2/3">
            <input name="subject" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-subject" type="text">
          </div>
        </div>

        <div class="md:flex md:items-center mb-6">
          <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-text">
              Text
            </label>
          </div>
          <div class="md:w-2/3">
            <textarea name="text" id="inline-text" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" cols="30" rows="6"></textarea>
          </div>
        </div>

        <div class="md:flex md:items-center">
          <div class="md:w-1/3"></div>
          <div class="md:w-2/3">
            <button class="w-full shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
              Create
            </button>
          </div>
        </div>
      </form>

  </div>
</x-layout>
