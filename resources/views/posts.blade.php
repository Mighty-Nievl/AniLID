<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    <main class="max-w-screen-sm m-auto">
        @foreach ($posts as $post)
        <article class="pb-5">
            <h3 class="font-semibold text-2xl">{{ $post['title'] }}</h3>
            <a href="#" class="font-light">{{ $post['author'] }} | 17 September 2024</a>
            <p class="text-justify indent-6 pt-2">
                {{ $post['body'] }}
            </p>
            <a href="#" class="text-emerald-600 hover:underline">Selengkapnya...</a>
        </article>
        @endforeach
    </main>

</x-layout>