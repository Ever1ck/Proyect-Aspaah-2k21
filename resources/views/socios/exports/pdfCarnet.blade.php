<!DOCTYPE html>
<html lang="en">

<head>
    <title>CSS Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Style the header */
        .header {
            padding: 30px;
            text-align: center;
            font-size: 35px;
        }

        /* Container for flexboxes */
        .row {
            display: flex;
            flex-direction: column;
        }

        /* Create three equal columns that sits next to each other */
        .column {
            padding: 10px;
            height: 450px;
            /* Should be removed. Only for demonstration */
        }

        /* Style the footer */
        .footer {
            padding: 10px;
            text-align: center;
        }

        @media (max-width: 900px) {
            .row {
                flex-direction: column;
            }
        }

    </style>
</head>

<body>
    <div class="header">
        <h2>
            <div src="/imagen/{{ $socios->imagen }}"></div>
        </h2>
    </div>

    <div class="row">
        <div class="column">
            <table style="border: hidden">
                <tbody style="border: hidden">
                    <tr style="border: hidden">
                        <td style="border: hidden">DATOS PERSONALES:</td>
                        <td style="border: hidden"></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr style="border: hidden">
                        <td style="border: hidden">Nombres y apellidos:</td>
                        <td style="border: hidden">{{$socios->persona->nombre}}</td>
                    </tr>
                    <tr style="border: hidden;">
                        </td>
                        <td style="border: hidden;">DNI:</td>
                        <td style="border: hidden">{{$socios->persona->dni}}</td>
                    </tr>
                    <tr style="border: hidden;">
                        </td>
                        <td style="border: hidden;">Número de celular:</td>
                        <td style="border: hidden">{{$socios->persona->telefono}}</td>
                    </tr>
                    <tr style="border: hidden;">
                        </td>
                        <td style="border: hidden;">Género:</td>
                        <td style="border: hidden">
                            @if ($socios->persona->sexo == '1')
                            Masculino
                            @else
                            Femenino
                            @endif
                        </td>
                    </tr>
                    <tr style="border: hidden;">
                        </td>
                        <td style="border: hidden;">Fecha de nacimiento:</td>
                        <td style="border: hidden">{{$socios->persona->fe_nacimiento}}</td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr style="border: hidden">
                        <td style="border: hidden">DIRECCIÓN:</td>
                        <td style="border: hidden"></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr style="border: hidden;">
                        </td>
                        <td style="border: hidden;">Comunidad de:</td>
                        <td style="border: hidden">{{$socios->comunidad}}</td>
                    </tr>
                    <tr style="border: hidden;">
                        </td>
                        <td style="border: hidden;">Distrito de:</td>
                        <td style="border: hidden">{{$socios->distrito->name}}</td>
                    </tr>
                    <tr style="border: hidden;">
                        </td>
                        <td style="border: hidden;">Provincia de:</td>
                        <td style="border: hidden">{{$socios->provincia->name}}</td>
                    </tr>
                    <tr style="border: hidden;">
                        </td>
                        <td style="border: hidden;">Departamento de:</td>
                        <td style="border: hidden">
                            {{$socios->departamento->name}}</td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr style="border: hidden">
                        <td style="border: hidden">PARIENTES:</td>
                        <td style="border: hidden"></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr style="border: hidden;">
                        </td>
                        <td style="border: hidden;">Hijos:</td>
                        <td style="border: hidden"></td>
                        <table>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Parentesco</th>
                            </tr>
                            <tr>
                                <td>Fernando</td>
                                <td>Puma</td>
                                <td>Hermano</td>
                            </tr>
                        </table>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <
    <div class="footer">
    </div>
</body>

</html>
