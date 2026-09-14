<x-layout title="Your cookies">
    <div class="w-full items-center flex flex-col mt-25 mb-50">
        @foreach($cookies as $cookie)
            <x-card :date="$cookie->created_at" :content="$cookie->body"/>
        @endforeach
    </div>
</x-layout>
