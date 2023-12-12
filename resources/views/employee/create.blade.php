<h1>Добавить сотрудника</h1>

<form action="{{ route('employees.store') }}" method="post">
    @csrf
    <input type="text" name="fio" value="{{old('fio')}}">
    <input type="text" name="test">
    <select name="gender" id="pet-select">
        <option value="man">M</option>
        <option value="woman">Ж</option>
    </select>
    <div>
        <input type="checkbox" name="kids" value="1"/>
        <label for="scales">Есть</label>
    </div>
    <select name="post">
        <option value="gay">гей</option>
        <option value="ppp">говноедж</option>
    </select>
    <select name="degree">
        <option value="gay">гей</option>
        <option value="ppp">говноедж</option>
    </select>
    <select name="sp">
        <option value="wedding">в браке</option>
        <option value="not_wedding">не в браке</option>
    </select>

    @if($errors->isNotEmpty())
        <ul>
            @foreach($errors->all() as $key => $value)
                <li>{{$key}}: {{$value}}</li>
            @endforeach
        </ul>
    @endif

    <input type="submit">
</form>
