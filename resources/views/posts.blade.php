<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    <main class="max-w-screen-sm m-auto">
        @foreach ($posts as $post)
            <div class="posts mb-5 shadow rounded-md bg-white ">
                <article class="p-3 pb-0 block">
                <a href="/posts/{{ $post['id'] }}" class="block">
                    <h3 class="font-semibold text-2xl hover:underline hover:text-emerald-600 block">
                        {{ $post['title'] }}
                    </h3>
                </a>
                        <a href="#" class="font-light">{{ $post['author'] }} | 17 September 2024</a>
                        <p class="text-justify indent-6 pt-2">
                            {{ Str::limit($post['body'], 75) }}
                        </p>
                </article>
                <nav class="mt-2 border-t border-slate-300 text-emerald-600 hover:underline rounded">
                    <a href="/posts/{{ $post['id'] }}" class=" px-3 py-1 block">
                        Selengkapnya &raquo;
                    </a>
                </nav>
            </div>
        @endforeach
    </main>

</x-layout>
