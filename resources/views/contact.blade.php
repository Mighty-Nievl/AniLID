<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <h3 class="text-xl">Contributors</h3>
    @foreach ($contact as $contact)
    <main class="flex m-5">
        <img src="{{ $contact['banner'] }}" alt="Marketin!" width="100" class="shadow">
        <article class="ml-3 content-center">
            <p>
                Owner: {{ $contact['nama'] }}
            </p>
            <p>
                email: {{ $contact['email'] }}
            </p>
        </article>
    </main>
    @endforeach
</x-layout>
