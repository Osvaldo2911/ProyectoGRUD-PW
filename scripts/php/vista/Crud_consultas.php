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
                            <a href="Crud_consultas.php" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-search"></i> <span class="ms-1 d-none d-sm-inline">Consulta</span>
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
                            <h4 class="mb-0 p-1">Consulta</h4>
                        </div>
                    </center>
                </header>

                <div class="col-12 mt-3">
                    <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                        <div class="dataTable-top">
                            <div>
                                <h6>Tabla Empleados</h6>
                            </div>

                        </div>
                        <form class="d-flex m-3">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        <div class="dataTable-container table-responsive">
                            <table id="tabla" class="table table-striped table-bordered table-hover dataTable-table">
                                <thead>
                                    <tr>
                                        <th data-sortable="" style="width: 13.2893%;"><a
                                                class="dataTable-sorter">Nombre</a></th>
                                        <th data-sortable="" style="width: 9.80207%;"><a
                                                class="dataTable-sorter">Apellido paterno</a></th>
                                        <th data-sortable="" style="width: 9.04807%;"><a
                                                class="dataTable-sorter">Apellido materno</a></th>
                                        <th data-sortable="" style="width: 12.1583%;"><a
                                                class="dataTable-sorter">DNI</a></th>
                                        <th data-sortable="" style="width: 12.0641%;"><a class="dataTable-sorter">Fecha
                                                nacimiento</a></th>
                                        <th data-sortable="" style="width: 7.82281%;"><a
                                                class="dataTable-sorter">Direccion</a></th>
                                        <th data-sortable="" style="width: 6.3148%;"><a
                                                class="dataTable-sorter">Sexo</a></th>
                                        <th data-sortable="" style="width: 6.3148%;"><a
                                                class="dataTable-sorter">Sueldo</a></th>
                                        <th data-sortable="" style="width: 6.3148%;"><a class="dataTable-sorter">Super
                                                DNI</a></th>
                                        <th data-sortable="" style="width: 6.3148%;"><a class="dataTable-sorter">DNO</a>
                                        </th>
                                        <th data-sortable="" style="width: 15.1744%;"><a
                                                class="dataTable-sorter">Modificar</a></th>
                                        <th data-sortable="" style="width: 14.3261%;"><a
                                                class="dataTable-sorter">Eliminar</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>os</td>
                                        <td>MonteOlivo</td>
                                        <td>Villanueva</td>
                                        <td>66901</td>
                                        <td>Casa</td>
                                        <td>7</td>
                                        <td>2000</td>
                                        <td>66901</td>
                                        <td>Casa</td>
                                        <td>7</td>
                                        <td> <a href="Crud_empleadosMod.html" class="btn btn-outline-success" onclick="">
                                                Modificar</a> </td>
                                        <td> <a href="#" class="btn btn-outline-danger" onclick="">
                                                Eliminar</a> </td>
                                    </tr>
                                </tbody>
                            </table>
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