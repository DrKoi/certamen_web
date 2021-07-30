@extends("layouts.master")

@section("contenido")
    
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <span>Registrar medición</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="fecha-date" class="form-label">Fecha</label>
                        <input type="text" id="fecha-date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="medidor-select" class="form-label">Medidor</label>
                        <select class="form-select" id="medidor-select">
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="direccion-txt" class="form-label">Dirección</label>
                        <input type="text" id="direccion-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="valor-txt" class="form-label">Valor</label>
                        <input type="number" class="form-control" id="valor-txt">
                    </div>
                    <div class="mb-3">
                        <label for="tipomedida-select" class="form-label">Tipo de medida</label>
                        <select class="form-select" id="tipomedida-select">
                        </select>
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button id="registrar-btn" class="btn btn-success">Registrar</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section("javascript")
@endsection