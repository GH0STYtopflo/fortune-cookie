<x-layout title={{$title}}>
    <form method="POST" action="/login" class="min-h-screen flex items-center justify-center w-full">
        <fieldset class="fieldset rounded-xl p-4 min-h-100 w-1/3" style="background-color: #2c273a">
            <h1 class="text-4xl mb-7 mt-10 font-bold" style="color: #F3F4F6">Login</h1>

            <label class="label" style="color: #F3F4F6">Username</label>
            <input name="username" type="text" class="input w-full" placeholder="Username" required/>
            <x-errormsg error="username"></x-errormsg>
            <x-errormsg error="email"></x-errormsg>

            <label class="label" style="color: #F3F4F6">Password</label>
            <input  name="password" type="password" class="input w-full" placeholder="Password" required/>
            <x-errormsg error="password"></x-errormsg>
            <x-errormsg error="email"></x-errormsg>

            <button type="submit" class="btn btn-neutral mt-4 rounded-2xl">Login</button>
        </fieldset>
    </form>
</x-layout>
