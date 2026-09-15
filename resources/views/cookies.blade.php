<x-layout title="Your cookies 🍪">
    <div class="w-full items-center flex flex-col mt-25 mb-50">
        @foreach($cookies as $cookie)
            <x-cookie_card :date="$cookie->created_at" :content="$cookie->body" :id="$cookie->id"/>
        @endforeach
    </div>
</x-layout>
