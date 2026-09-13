@props(['error'])

@error($error)
<p class="txt" style="color: red"> {{$message}} </p>
@enderror
