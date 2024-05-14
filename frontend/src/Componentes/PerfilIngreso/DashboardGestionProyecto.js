import React from 'react'
import './PerfilDuenoDatos.css';

export const DashboardGestionProyecto = () => {
    return (
        <div>
            <div class="row" style={{ paddingLeft: '235px', margin: '1em' }}>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title card-header-datos">Proyectos</div>
                            <div class="row proyectos-informacion">
                                <div class="col-md-8">
                                    <input type="text" placeholder="Buscar" class="form-control" id="inputEmail4" />
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">+ Agregar</button>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="..." class="img-fluid rounded-start"  ></img>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Lotizen</h5>
                                            <p class="card-text">Más información aquí</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="..." class="img-fluid rounded-start"  ></img>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Lotizen</h5>
                                            <p class="card-text">Más información aquí</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="..." class="img-fluid rounded-start"  ></img>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Lotizen</h5>
                                            <p class="card-text">Más información aquí</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body card-header-datos">

                                Datos del proyecto
                            </div>


                            <div class="card-body">
                                <form class="row g-3 needs-validation" novalidate>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">ID</label>
                                        <input type="text" class="form-control" id="validationCustom01" />

                                    </div>
                                    <div class="col-md-8">
                                        <label for="validationCustom02" class="form-label">Nombre del proyecto</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required />

                                    </div>



                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label">Departamento</label>
                                        <input type="text" class="form-control" id="validationCustom01" />

                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label">Ciudad</label>
                                        <input type="text" class="form-control" id="validationCustom01" />

                                    </div>

                                    <div class="col-md-12">
                                        <label for="validationCustom01" class="form-label">Dirección</label>
                                        <input type="text" class="form-control" id="validationCustom01" />

                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label">Estado</label>
                                        <input type="text" class="form-control" id="validationCustom01" />
                                    </div>

                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Foto de perfil</label>
                                        <input class="form-control" type="file" id="formFile"></input>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Fecha</label>
                                        <input class="form-control" type="date" id="formFile"></input>
                                    </div>


                                    <hr className="separador" />

                                    <div class="card-body card-header-datos">

                                        Categoria del proyecto
                                    </div>

                                    <div class="col-md-12">
                                        <label for="validationCustom01" class="form-label">Categoria</label>
                                        <input type="text" class="form-control" id="validationCustom01" />
                                    </div>

                                    <div class="col-md-12">
                                        <label for="formFile" class="form-label">Descripción</label>
                                        <input class="form-control" type="text" id="formFile"></input>
                                    </div>

                                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                        <button class="btn btn-primary me-md-2" type="button">Guardar cambios</button>
                                        <button class="btn btn-primary btn-danger" type="button">Eliminar proyecto</button>
                                    </div>

                                </form>




                            </div>



                        </div>
                    </div>
                </div>
            </div>




        </div>
    )
}
