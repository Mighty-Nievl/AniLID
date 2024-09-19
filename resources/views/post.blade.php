<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    <main class="max-w-screen-sm m-auto">
        <div class="posts mb-5 shadow rounded-md bg-white">
            <article class="p-3 pb-0">
                <h3 class="font-semibold text-2xl">
                    {{ $post['title'] }}
                </h3>
                <a href="#" class="font-light">{{ $post['author'] }} | 17 September 2024</a>
                <p class="text-justify indent-6 pt-2 px-5">
                    {{ $post['body'] }}
                </p>
            </article>
            <nav class="mt-2 border-t border-slate-300 text-emerald-600 hover:underline rounded">
                <a href="/posts" class=" px-3 py-1 block">
                    &laquo; Kembali 
                </a>
            </nav>
        </div>
    </main>

</x-layout>
