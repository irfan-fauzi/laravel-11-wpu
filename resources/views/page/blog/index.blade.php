<x-layout>
    <x-slot:header>{{ $header }}</x-slot:header>
    <h1 class="text-3xl font-bold text-gray-300 mt-5">Welcome to my Blog my friend... </h1>
    <main class="flex lg:flex-row flex-col gap-3">
        <div class="lg:w-3/4">
            @foreach ($posts as $article)
                <x-article :article="$article"></x-article>
            @endforeach
        </div>
        <section class="lg:w-1/4">

        </section>
    </main>

</x-layout>
