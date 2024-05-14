import React from 'react'
import './PerfilDuenoDatos.css';
import { IconBxsBuildingHouse } from '../Icons/iconos2.js';


export const DashboardInmueble = () => {
    return (
        <div>

            <div class="row" style={{ paddingLeft: '235px', margin: '2em' }}>
                <div class="col-sm-12">

                    <div class="card card-datos">

                        <div class="card-body card-header-datos">
                            <IconBxsBuildingHouse style={{ marginRight: '0.5rem' }} />
                            Gestión de inmuebles
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
                                    <div class="card-title card-header-datos">Plano del proyecto</div>
                                    <img alt='Mapa de lotes' src='/lotes-imagen.png'
                                        style={{ height: '24em' }} />


                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="card">
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
                                                <h5 class="card-title title-card-informacion">Lotizen</h5>
                                                <p class="card-text texto-card-informacion ">Más información aquí</p>
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
                                                <h5 class="card-title title-card-informacion">Lotizen</h5>
                                                <p class="card-text texto-card-informacion ">Más información aquí</p>
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
                                                <h5 class="card-title title-card-informacion">Lotizen</h5>
                                                <p class="card-text texto-card-informacion ">Más información aquí</p>
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
                                                <h5 class="card-title title-card-informacion">Lotizen</h5>
                                                <p class="card-text  texto-card-informacion ">Más información aquí</p>
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
                                                <h5 class="card-title title-card-informacion">Lotizen</h5>
                                                <p class="card-text  texto-card-informacion ">Más información aquí</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title card-header-datos">Datos del inmueble</div>
                                    <form class="row g-3">
                                        <div class="col-md-3">
                                            <label for="inputEmail4" class="form-label">ID</label>
                                            <input type="text" class="form-control" id="inputid"></input>
                                        </div>
                                        <div class="col-md-9">
                                            <label for="inputPassword4" class="form-label">Nombre del inmueble</label>
                                            <input type="text" class="form-control" id="inputPassword4"></input>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Precio</label>
                                            <input type="text" class="form-control" id="inputPassword4"></input>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Ubicación</label>
                                            <input type="text" class="form-control" id="inputPassword4"></input>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputPassword4" class="form-label">Dirección</label>
                                            <input type="text" class="form-control" id="inputPassword4"></input>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">Servicio de agua</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Seleccionar...</option>
                                                <option>Si</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">Servicio de luz</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Seleccionar...</option>
                                                <option>Si</option>
                                                <option>No</option>
                                            </select>
                                        </div>

                                        <hr className="separador" />
                                        <div class="card-title card-header-datos">Categoria del inmueble</div>
                                        <div class="col-md-12">
                                            <label for="inputPassword4" class="form-label">Categoria</label>
                                            <input type="text" class="form-control" id="inputPassword4"></input>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputPassword4" class="form-label">Descripción</label>
                                            <input type="text" class="form-control" id="inputPassword4"></input>
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




        </div >
    )
}
