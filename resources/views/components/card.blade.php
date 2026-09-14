@props([
    'date',
    'content'
])

<div class="card text-primary-content w-1/4 mb-2" style="background-color: #1B192A">
    <div class="card-body">
        <p class="text-xl">{{ $content }}</p>
        <h2 class="text-xs bg-blend-color mt-3">Date: {{ $date }}</h2>
    </div>
</div>
