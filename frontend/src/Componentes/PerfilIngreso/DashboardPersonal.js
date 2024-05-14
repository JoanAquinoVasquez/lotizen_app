import React from 'react'
import { IconPeopleFill } from '../Icons/iconos2.js'
import './PerfilDuenoDatos.css';


export const DashboardPersonal = () => {
    return (
        <div>

            <div class="row" style={{ paddingLeft: '235px', margin: '2em' }}>
                <div class="col-sm-12">

                    <div class="card card-datos">

                        <div class="card-body card-header-datos">
                            <IconPeopleFill style={{ marginRight: '0.5rem' }} />
                            Gestion de personal
                        </div>
                    </div>

                    <div class="card card-datos" style={{ marginTop: '1em', backgroundColor: '#5644FC' }}>

                        <div class="card-body card-header-datos" style={{ color: 'white', marginLeft: '2em' }}>
                            Proyecto
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 ">
                            <div class="card card-inmueble ">
                                <div class="card-body">

                                    <div class="card-title card-header-datos">Proyecto</div>
                                    <div class="row proyectos-informacion">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Buscar" class="form-control" id="inputEmail4" />
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">+ Agregar</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="card mb-3 card-informacion-proyecto" >
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <img src="..." class="img-fluid rounded-start" alt="Imagen del card"></img>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <h5 class="card-title title-card-informacion">Pedro Fernandez</h5>
                                                <p class="card-text texto-card-informacion ">Supervisor</p>
                                                <p class="card-text texto-card-informacion ">DNI: </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3 card-informacion-proyecto" >
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <img src="..." class="img-fluid rounded-start" alt="Imagen del card"></img>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <h5 class="card-title title-card-informacion">Pedro Fernandez</h5>
                                                <p class="card-text texto-card-informacion ">Supervisor</p>
                                                <p class="card-text texto-card-informacion ">DNI: </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3 card-informacion-proyecto" >
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <img src="..." class="img-fluid rounded-start" alt="Imagen del card"></img>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <h5 class="card-title title-card-informacion">Pedro Fernandez</h5>
                                                <p class="card-text texto-card-informacion ">Supervisor</p>
                                                <p class="card-text texto-card-informacion ">DNI: </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card mb-3 card-informacion-proyecto">
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <img src="..." class="img-fluid rounded-start" alt="Imagen del card"></img>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                            <h5 class="card-title title-card-informacion">Pedro Fernandez</h5>
                                                <p class="card-text texto-card-informacion ">Supervisor</p>
                                                <p class="card-text texto-card-informacion ">DNI: </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 
                            </div>
                        </div>

                        <div class="col-sm-8 ">
                            <div class="card card-inmueble ">
                                <div class="card-body">
                                    <div class="card-title card-header-datos">Datos del personal</div>


                                    <form class="row g-3">
                                        <div class="col-md-3">
                                            <label for="inputEmail4" class="form-label">ID</label>
                                            <input type="text" class="form-control" id="inputid"></input>
                                        </div>
                                        <div class="col-md-9">
                                            <label for="inputPassword4" class="form-label">Proyecto</label>
                                            <input type="text" class="form-control" id="inputPassword4"></input>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Nombres</label>
                                            <input type="text" class="form-control" id="inputPassword4"></input>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Apellidos</label>
                                            <input type="text" class="form-control" id="inputPassword4"></input>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom04" class="form-label">Documento de identidad</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Seleccionar...</option>
                                                <option value="1">DNI</option>
                                                <option value="2">Pasaporte </option>
                                                <option value="3">Carnet Extranjeria</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">N° de Documento </label>
                                            <input type="text" class="form-control" id="inputPassword4"></input>

                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Tipo de trabajador</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Seleccionar...</option>
                                                <option>Gerente comercial</option>
                                                <option>Presidente ejecutivo</option>
                                                <option>Supervisor</option>
                                                <option>Asesor</option>
                                            </select>

                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">Telefono </label>
                                            <input type="text" class="form-control" id="inputPassword4"></input>

                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">Estado </label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Seleccionar...</option>
                                                <option>Activo</option>
                                                <option>Inactivo</option>

                                            </select>

                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">Externo </label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Seleccionar...</option>
                                                <option>Si</option>
                                                <option>No</option>

                                            </select>

                                        </div>


                                        <hr className="separador" />
                                        <div class="card-title card-header-datos">Categoria del inmueble</div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Correo</label>
                                            <input type="email" class="form-control" id="inputPassword4"></input>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Contraseña</label>
                                            <input type="password" class="form-control" id="inputPassword4"></input>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                        </div>
                                    </form>





                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>









        </div>
    )
}
