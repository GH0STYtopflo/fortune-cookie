@php use function Laravel\Prompts\error; @endphp
<x-layout title={{$title}}>
    @csrf

    <form method="POST" action="/signup" class="min-h-screen flex items-center justify-center w-full">
        <fieldset class="fieldset rounded-xl p-4 min-h-120 w-1/3" style="background-color: #2c273a">
            <h1 class="text-4xl mb-7 mt-10 font-bold" style="color: #F3F4F6">Signup</h1>

            <label class="label" style="color: #F3F4F6">Username</label>
            <input name="username" type="text" class="input w-full" placeholder="Username" @error('username') value={{session()->getOldInput('username')}} @enderror required/>
            <x-errormsg error="username"></x-errormsg>

            <label class="label" style="color: #F3F4F6">Password</label>
            <input name="password" type="password" class="input w-full" placeholder="Password" required/>
            <x-errormsg error="password"></x-errormsg>

            <label class="label" style="color: #F3F4F6">Email</label>
            <input name="email" type="email" class="input w-full" @error('email') value={{session()->getOldInput('email')}} @enderror placeholder="Password"/>
            <x-errormsg error="email"></x-errormsg>

            <button type="submit" class="btn btn-neutral mt-4 rounded-2xl">Signup</button>
        </fieldset>
    </form>
</x-layout>
