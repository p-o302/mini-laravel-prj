<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>
</head>
<body>
    <h1>TODOS PAGE</h1>
    {{-- {{$todos}} --}}
    <ol>
        @foreach ($todos as $todo)
            <li>{{ $todo->name}}   {{ $todo->description}} </li>
            {{-- <li>{{ $todo->description}}</li> --}}
        @endforeach
    </ol>

    <style>
        th,td{
            padding: 30px;
             text-align: left;
             border-bottom: 1px solid #ddd;
        }
    </style>
    <table celpadding="1",>
        <tr>
          <th >ID</th>
          <th>Name</th>
          <th>Des</th>
        </tr>

        @foreach ($todos as $todo)
            <tr >
          <td >{{ $todo->id}}</td>
          <td>{{ $todo->name}}</td>
          <td>{{ $todo->description}}</td>
        </tr>
        @endforeach
        
        
      </table>

</body>
</html>