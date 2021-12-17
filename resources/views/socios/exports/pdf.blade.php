<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Listar personas</title>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: "Gill Sans Extrabold", Helvetica, sans-serif;
        }

        body {
            margin: 3cm 2cm 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #04637A;
            color: white;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #047A41;
            color: white;
            text-align: center;
            line-height: 35px;
        }

        table {
            width: 100%;
            background: white;
            margin-bottom: 1.25em;
            border: solid 1px #dddddd;
            border-collapse: collapse;
            border-spacing: 0;
        }

        table tr th,
        table tr td {
            padding: 0.5625em 0.625em;
            font-size: 0.875em;
            color: #222222;
            border: 1px solid #dddddd;
            text-align: center;
        }

        table tr.even,
        table tr.alt,
        table tr:nth-of-type(even) {
            background: #f9f9f9;
        }

    </style>
</head>

<body>
    <header>
        <h1>Lista de Socios ASPAAH</h1>
    </header>

    <main>
        <table class="resp">
            <thead>
                <tr>
                    <th>Cod.</th>
                    <th>Nombres y apellidos</th>
                    <th>DNI</th>
                    <th>Número</th>
                    <th>Sexo</th>
                    <th>Fecha de nacimiento</th>
                    <th>Comunidad</th>
                    <th>Distrito</th>
                    <th>Provincia</th>
                    <th>Departamento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($socios as $socio)
                <tr>
                    <td>{{ $socio->id }}</td>
                    <td>{{ $socio->persona->nombre }} {{ $socio->persona->ape_paterno }} {{ $socio->persona->ape_materno }}</td>
                    <td>{{ $socio->persona->dni }}</td>
                    <td>{{ $socio->persona->telefono }}</td>
                    <td>
                        @if ($socio->persona->sexo == '1')
                        Varón
                        @else
                        Mujer
                        @endif
                    </td>
                    <td>{{ $socio->persona->fe_nacimiento }}</td>
                    <td>{{ $socio->comunidad }}</td>
                    <td>{{ $socio->distrito->name }}</td>
                    <td>{{ $socio->provincia->name }}</td>
                    <td>{{ $socio->departamento->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
    <footer>
        <h1>TEAM DAMS</h1>
    </footer>
</body>

</html>
