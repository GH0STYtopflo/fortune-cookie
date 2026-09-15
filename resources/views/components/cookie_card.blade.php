@props([
    'date',
    'content',
    'id'
])

<div class="card text-primary-content w-1/4 mb-2 " style="background-color: #1B192A">
    <form action="/my_cookies/{{$id}}" method="POST" class="flex ml-auto mt-2 mr-2">
        @method('DELETE')
        <button type="submit" class="btn btn-soft rounded-2xl" style="background-color: #a61a1a; color: white">Delete</button>
    </form>

    <div class="card-body">
        <p class="text-xl" style="margin-top: -5px;">{{ $content }}</p>
        <h2 class="text-xs bg-blend-color mt-3">Date: {{ $date }}</h2>
    </div>
</div>
