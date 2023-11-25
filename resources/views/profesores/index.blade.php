@extends('layout.template');

@section('content')
<div class="container mt-5">
    <h1 class="">PROFESORES</h1>

    <a href="/profesoresCrear" class="btn btn-primary float-end mb-3">Crear Profesor</a>

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
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody id="tablaBody">

            </tbody>
        </table>
    </div>
</div>

<script>
    function eliminarProfesor(id) {
        axios.delete(`http://127.0.0.1:8000/api/profesores/${id}`)
            .then(response => {
                axios.get('http://127.0.0.1:8000/api/profesores')
                    .then(response => {
                        console.log(response.data);
                    })
                    .catch(error => {
                        console.error('Error al obtener la lista de profesores:', error);
                    });
            })
            .catch(error => {
                console.error('Error al eliminar el profesor:', error);
            });
    }

    function renderizarTabla(profesores) {
        const tablaBody = document.getElementById('tablaBody');
        tablaBody.innerHTML = '';

        profesores.forEach(profesor => {
            const fila = document.createElement('tr');
            fila.innerHTML = `
                    <td>${profesor.documento}</td>
                    <td>${profesor.nombre}</td>
                    <td>${profesor.telefono}</td>
                    <td>${profesor.email}</td>
                    <td>${profesor.direccion}</td>
                    <td>${profesor.ciudad}</td>
                    <td>
                        <button onclick="eliminarProfesor(${profesor.id})">Eliminar</button>
                    </td>
                `;

            tablaBody.appendChild(fila);
        });

    }

    document.addEventListener('DOMContentLoaded', function() {
        axios.get('http://127.0.0.1:8000/api/profesores')
            .then(response => {
                renderizarTabla(response.data);
            })
            .catch(error => {
                console.error('Error al obtener la lista de profesores:', error);
            });
    });
</script>
@endsection