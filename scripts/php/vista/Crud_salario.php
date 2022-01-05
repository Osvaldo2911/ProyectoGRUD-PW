<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Amprise</title>
</head>

<body>
    
        <script>
        function alertConf(){
            alert("Desea eliminarlo?");
        }
    </script>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="#"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Bienvenido</span>
                    </a>

                    <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>

                    <a href="#"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Name</span>
                    </a>

                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="Crud_inicio.php" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house-door-fill"></i> <span
                                    class="ms-1 d-none d-sm-inline">Inicio</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="Crud_empleados.php" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-person-fill"></i> <span
                                    class="ms-1 d-none d-sm-inline">Empleados</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="Crud_salario.php" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-person-fill"></i> <span
                                    class="ms-1 d-none d-sm-inline">Salario</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="Crud_consultas.php" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-search"></i> <span
                                    class="ms-1 d-none d-sm-inline">Consulta</span>
                            </a>
                        </li>
                        <li class="nav-item mb-5">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-wrench"></i> <span class="ms-1 d-none d-sm-inline">Proyectos</span>
                            </a>
                        </li>
                        <form action="cerrarsesion.php" method="POST" class="mt-5">
                            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">CERRAR SESION</button>
                        </form>
                    </ul>
                </div>
            </div>
            <div class="col py-3">

                <header class="bg-white shadow-sm px-4 py-3 z-index-20">
                    <center>
                        <div class="container-fluid px-0">
                            <h4 class="mb-0 p-1">Empleados</h4>
                        </div>
                    </center>
                </header>

                <div class="container mt-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    Agrega Empleado
                                </div>
                                <div class="card-body">
                                    <form action="../controlador/alta_emp.php" method="POST">
                                        <div class="mb-3">
                                            <label for="txtNombre" class="form-label">Nombre</label>
                                            <span class="error" style="color:red">
                                            </span>
                                            <input type="text" onkeypress='return event.charCode >= 65 && event.charCode <= 90 ||event.charCode >= 97 && event.charCode <= 122' class="form-control" name="txtNombre" id="txtNombre"
                                                placeholder="Nombre" value="" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="txtAP" class="form-label">Apellido paterno</label>
                                            <span class="error" style="color:red">
                                            </span>
                                            <input type="text" onkeypress='return event.charCode >= 65 && event.charCode <= 90 ||event.charCode >= 97 && event.charCode <= 122' class="form-control" name="txtAP" id="txtAP"
                                                placeholder="Apellido Paterno" value="" required>
                                        </div>


                                        <div class="mb-3">
                                            <label for="txtFecha" class="form-label">Fecha de nacimiento</label>
                                            <span class="error" style="color:red">
                                            </span>
                                            <input type="date" class="form-control" name="txtFecha" id="txtFecha"
                                                placeholder="" value="" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="txtTipo" class="form-label">Sexo</label>
                                            <select class="form-select" id="typo" name="typo">
                                                <option value="H">M</option>
                                                <option value="M">F</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="txtFecha" class="form-label">Inicio laboral</label>
                                            <span class="error" style="color:red">
                                            </span>
                                            <input type="date" class="form-control" name="txtLaboralFecha" id="txtFecha"
                                                placeholder="" value="" required>
                                        </div>

                                        <br>
                                        <div class="btn-group" role="group">
                                            <button type="submit" class="btn btn-success" onclick=" ">Agregar</button>
                                            <button id="btnCancelar" type="reset" class="btn btn-outline-danger">Cancelar</button>
                                        </div>
                                    </form>
            <div class="col-12 mt-5">
                <table id="tabla" class="table table-striped table-bordered table-hover">
                    <thead>
                        
                        <tr>
                            <th>Num Empleado</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Sexo</th>
                            <th>Fecha Laboral</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            include('../modelo/empleado_dao.php');
                            $dao = new EmpleadoDAO();
                            $res = $dao->mostrar();

                            if (mysqli_num_rows($res) > 0) {
                                //echo "<table class= 'table table-striped table-bordered'>";
                                while ($fila = mysqli_fetch_assoc($res)) {
                                    printf("<tr>
                                         <td>" . $fila['emp_no'] . "</td>" .
                                        "<td>" . $fila['birth_date'] . "</td>" .
                                        "<td>" . $fila['first_name'] . "</td>" .
                                        "<td>" . $fila['last_name'] . "</td>" .
                                        "<td>" . $fila['gender'] . "</td>" .
                                        "<td>" . $fila['hire_date'] . "</td>" .
                                        "<td> <a class='btn btn-info' href='formulario_modificaciones.php?id=" . $fila["emp_no"] . "' data-bs-toggle='modal'>SELECCIONAR</a></td>" .
                                        "<td> <a href='../controlador/baja_emp.php?emp_no=%s' class= 'btn btn-danger' onclick='return alertConf()'> ELIMINAR</a>  </td> </tr>", $fila['emp_no']);
                                }
                            } else {
                                echo "SIN REGISTROS PARA MOSTRAR";
                            }

                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  -->
</body>

</html>