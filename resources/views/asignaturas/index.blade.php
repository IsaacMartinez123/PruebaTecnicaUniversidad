@extends('layout.template');

@section('content')
<h1>ASIGNATURAS</h1>

<a href="/asignaturasCrear" class="btn btn-primary float-end mb-3">Crear Asignatura</a>


<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Creditos</th>
                <th scope="col">Area De Conocimiento</th>
                <th scope="col">Tipo De Materia</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody id="tablaBody">

        </tbody>
    </table>
</div>
</div>

<script>
    function eliminarAsignatura(id) {
        axios.delete(`http://127.0.0.1:8000/api/asignaturas/${id}`)
            .then(response => {
                axios.get('http://127.0.0.1:8000/api/asignaturas')
                    .then(response => {
                        renderizarTabla(response.data);
                    })
                    .catch(error => {
                        console.error('Error al obtener la lista de asignaturas:', error);
                    });
            })
            .catch(error => {
                console.error('Error al eliminar la asignatura:', error);
            });
    }

    function renderizarTabla(asignaturas) {
        const tablaBody = document.getElementById('tablaBody');
        tablaBody.innerHTML = '';

        asignaturas.forEach(asignatura => {
            const fila = document.createElement('tr');
            fila.innerHTML = `
            <td>${asignatura.id}</td>
            <td>${asignatura.nombre}</td>
            <td>${asignatura.descripcion}</td>
            <td>${asignatura.creditos}</td>
            <td>${asignatura.area_conocimiento}</td>
            <td>${asignatura.tipo_materia}</td>
            <td>
                <button onclick="eliminarAsignatura(${asignatura.id})">Eliminar</button>
            </td>
            `;
            tablaBody.appendChild(fila);
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        axios.get('http://127.0.0.1:8000/api/asignaturas')
            .then(response => {
                renderizarTabla(response.data);
            })
            .catch(error => {
                console.error('Error al obtener la lista de profesores:', error);
            });
    });
</script>
@endsection