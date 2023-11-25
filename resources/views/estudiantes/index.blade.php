@extends('layout.template');

@section('content')
<div class="container mt-5">
    <h1 class="">ESTUDIANTES</h1>

    <a href="/estudiantesCrear" class="btn btn-primary float-end mb-3">Crear Estudiante</a>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Documento</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Semestre</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody id="tablaBody">

            </tbody>
        </table>
    </div>
</div>


<script>
    function eliminarEstudiante(id) {
        axios.delete(`http://127.0.0.1:8000/api/estudiantes/${id}`)
            .then(response => {
                axios.get('http://127.0.0.1:8000/api/estudiantes')
                    .then(response => {
                        renderizarTabla(response.data);
                    })
                    .catch(error => {
                        console.error('Error al obtener la lista de estudiantes:', error);
                    });
            })
            .catch(error => {
                console.error('Error al eliminar el estudiante:', error);
            });
    }

    function renderizarTabla(estudiantes) {
        const tablaBody = document.getElementById('tablaBody');
        tablaBody.innerHTML = '';

        estudiantes.forEach(estudiante => {
            const fila = document.createElement('tr');
            fila.innerHTML = `
                        <td>${estudiante.documento}</td>
                        <td>${estudiante.nombre}</td>
                        <td>${estudiante.telefono}</td>
                        <td>${estudiante.email}</td>
                        <td>${estudiante.direccion}</td>
                        <td>${estudiante.ciudad}</td>
                        <td>${estudiante.semestre}</td>
                        <td>
                            <button onclick="eliminarEstudiante(${estudiante.id})">Eliminar</button>
                        </td>
                    `;
            tablaBody.appendChild(fila);
        });
    }

    document.addEventListener('DOMContentLoaded', function() {

        axios.get('http://127.0.0.1:8000/api/estudiantes')
            .then(response => {
                renderizarTabla(response.data);
            })
            .catch(error => {
                console.error('Error al obtener la lista de profesores:', error);
            });
    });
</script>
@endsection