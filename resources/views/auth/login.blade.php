<x-base>
    <x-slot:title>
        Вход
    </x-slot:title>
    <h1>Логин</h1>

    <form action="{{ route('login') }}" method="post">
        @csrf
        <div>
            <label for="login">Логин</label>
            <input type="text" name="login" id="login">
            @error('login')
                <div style="color: brown;">{{$message}}</div>
            @enderror
        </div>
        <div>
            <label for="password">Пароль</label>
            <input type="password" name="password" id="password">
            @error('password')
                <div style="color: brown;">{{$message}}</div>
            @enderror
        </div>

        <input type="submit">
    </form>
</x-base>
