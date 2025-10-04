  <article class="mt-10">
      <section class="flex items-center gap-2 justify-between">
          <div class="flex items-center gap-3">
              <img src="{{ $article['profilImg'] }}" alt="user" class="w-[35px] h-[35px] object-cover rounded-full">
              <a href="#" class="text-xs">{{ $article['author'] }}</a>
          </div>
          <p class="text-sm">4 days ago</p>
      </section>


      <section class="mt-4">
          <a href="/blog/{{ $article['slug'] }}">
              <h1 class="text-2xl capitalize font-semibold">{{ $article['title'] }}</h1>
          </a>
          <p class="mt-2">{{ Str::limit($article['body'], 340) }}</p>
          <div class="flex justify-between mt-5">
              <div class="flex items-center gap-5">
                  <a href="#" class="bg-gray-950 text-sm px-3 py-1 rounded-md text-gray-400">{{ $article['category'] }}</a>
                  <span class="text-sm text-gray-600">{{ $article['duration'] }} min read</span>
              </div>
              <a href="/blog/{{ $article['slug'] }}" class="underline">Continue read &raquo;</a>
          </div>
      </section>
      <div class="border-b mt-4 border-gray-700">
        
      </div>
  </article>
