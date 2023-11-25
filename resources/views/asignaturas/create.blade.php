@extends('layout.template');

@section('content')
<div class="container mt-5">
    <h1>Crear Asignatura</h1>

    <form id="formularioAsignatura">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción:</label>
            <textarea class="form-control" name="descripcion" required></textarea>
        </div>

        <div class="mb-3">
            <label for="creditos" class="form-label">Créditos:</label>
            <input type="number" class="form-control" name="creditos" required>
        </div>

        <div class="mb-3">
            <label for="area_conocimiento" class="form-label">Área de Conocimiento:</label>
            <input type="text" class="form-control" name="area_conocimiento" required>
        </div>

        <div class="mb-3">
            <label for="tipo_materia" class="form-label">Tipo de Materia:</label>
            <select class="form-select" name="tipo_materia" required>
                <option value="electiva">Electiva</option>
                <option value="obligatoria">Obligatoria</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Asignatura</button>
    </form>
</div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const formularioAsignatura = document.getElementById('formularioAsignatura');

            formularioAsignatura.addEventListener('submit', function (event) {
                event.preventDefault();

                const formData = new FormData(formularioAsignatura);

                axios.post('http://127.0.0.1:8000/api/asignaturas', formData)
                    .then(response => {
                        
                        window.location.href = '/asignaturas';
                    })
                    .catch(error => {
                        console.error('Error al crear la asignatura:', error);
                    });
            });
        });
    </script>
@endsection