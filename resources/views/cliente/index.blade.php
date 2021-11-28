<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro Clientes</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



</head>
<body>
    
               <div class="clor-xl-12">
                   <form action="{{route('cliente.index')}}" method="get">
                    <div class="form-row">



                <div class="col-auto my-1">

                    <a href="{{route('cliente.create')}}" class="btn btn-success">nuevo</a>


                   

               </div>
                   </form>

    </div>
 <div class="col-xl-12">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                       <tr>
                                           <th>opciones</th>
                                           <th>ID</th>
                                           <th>nit ci</th>
                                           <th>nombres</th>
                                           <th>apellidos</th>
                                           <th>email</th>
                                           <th>direccion</th>
                                           <th>celular</th>



                                       </tr>

                                </thead>
                               

                                <tbody>

                               
                                    
                                  @foreach ($clientes as $cliente)

                                    <tr>
                                        <td>Editar | Eliminar</td>
                                        <td>{{$cliente-> codigo_cliente}}</td>
                                        <td>{{$cliente-> nit_ci}}</td>
                                        <td>{{$cliente-> nombres}}</td>
                                        <td>{{$cliente-> apellidos}}</td>
                                        <td>{{$cliente-> email}}</td>
                                        <td>{{$cliente-> direccion}}</td>
                                        <td>{{$cliente-> celular}}</td>

                                    </tr>
                                    @endforeach

                                </tbody>


                        </div>
                 </div>

           </div>



    </div>
</body>
</html>