<x-layout>
    <x-slot:header>{{ $header }}</x-slot:header>
    <main class="flex lg:flex-row flex-col gap-3">
        <article class="lg:w-3/4">
            <header>
                <img src="{{ $post['cover'] }}" alt="ilustrasi {{ $post['title'] }}">
                <h1 class="text-gray-300 text-4xl capitalize mt-5 font-semibold">{{ $post['title'] }}</h1>
                <div class="flex justify-between items-center mt-5 mb-10">
                    <div class="flex items-center  gap-5 mt-3">
                        <a href="#"
                            class="bg-blue-700 text-gray-300 text-sm px-3 py-1 rounded-md">{{ $post['category'] }}</a>
                        <p class="text-sm">{{ $post['duration'] }} minutes reading</p>
                    </div>
                    <div class="flex items-center gap-3 mr-4">
                        <img src="/{{ $post['profilImg'] }}" alt="user"
                            class="w-[35px] h-[35px] object-cover rounded-full">
                        <a href="#" class="text-xs">{{ $post['author'] }}</a>
                    </div>
                </div>
            </header>
            <section class="mt-5">
                <p>{{ $post['body'] }}</p>

            </section>
        </article>
        <article class="lg:w-1/4 border border-gray-700">
            <section class="bg-[url(http://127.0.0.1:8000/img/bg-blue.png)]  bg-cover bg-center bg-no-repeat h-[400px] p-10">
              <p class="text-gray-400"></p>
            </section>
        </article>
    </main>
</x-layout>
