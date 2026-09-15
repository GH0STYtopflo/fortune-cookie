<x-layout title="Your cookies 🍪">
    <div class="w-full items-center flex flex-col mt-20 mb-50">
        <form action="/my_cookies" method="GET" style="background-color: #1B192A" class="p-10 rounded-2xl w-1/3 flex flex-col items-center mb-5">
            <label class="font-bold text-2xl" style="color: white">Search Your Cookies</label>
            <br>
            <input name="body" type="text" class="bg-white w-100 h-10 p-2 rounded" placeholder="Cookie Text">
        </form>

        @foreach($cookies as $cookie)
            <x-cookie_card :date="$cookie->created_at" :content="$cookie->body" :id="$cookie->id"/>
        @endforeach
    </div>
</x-layout>
