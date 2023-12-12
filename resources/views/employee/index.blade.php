<h1>Сотрудники</h1>

@if($data->isNotEmpty())
    @foreach($data as $employee)
        <div>
            <h3>{{ $employee->fio }}</h3>
            <p>{{ $employee->gender }}</p>
            <p>{{ $employee->sp }}</p>
            <p>{{ $employee->kids }}</p>
            <p>{{ $employee->post }}</p>
            <p>{{ $employee->degree }}</p>
        </div>
    @endforeach
@endif
