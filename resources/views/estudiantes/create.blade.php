@extends('layout.template');

@section('content')
<div class="container mt-5">
    <h1>Crear Estudiante</h1>

    <form id="formularioEstudiante">
        @csrf
        <div class="mb-3">
            <label for="documento" class="form-label">Documento:</label>
            <input type="text" class="form-control" name="documento" required>
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono:</label>
            <input type="text" class="form-control" name="telefono" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección:</label>
            <input type="text" class="form-control" name="direccion" required>
        </div>

        <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad:</label>
            <input type="text" class="form-control" name="ciudad" required>
        </div>

        <div class="mb-3">
            <label for="semestre" class="form-label">Semestre:</label>
            <input type="text" class="form-control" name="semestre" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Estudiante</button>
    </form>
</div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const formularioEstudiante = document.getElementById('formularioEstudiante');

            formularioEstudiante.addEventListener('submit', function (event) {
                event.preventDefault();

                const formData = new FormData(formularioEstudiante);

                axios.post('http://127.0.0.1:8000/api/estudiantes', formData)
                    .then(response => {
                        
                        window.location.href = '/estudiantes';
                    })
                    .catch(error => {
                        console.error('Error al crear el estudiante:', error);
                    });
            });
        });
    </script>
@endsection