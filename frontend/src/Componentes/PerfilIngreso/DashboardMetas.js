import React from 'react'
import { IconGoal } from '../Icons/iconos2.js';
import './PerfilDuenoDatos.css';
export const DashboardMetas = ({ meta }) => {
    return (
        <div>

            <div class="row" style={{ paddingLeft: '235px', margin: '2em' }}>
                <div class="col-sm-12">

                    <div class="card card-datos">

                        <div class="card-body card-header-datos">
                            <IconGoal style={{ marginRight: '0.5rem' }} />
                            Gestión de metas
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
                                    <div class="card-title card-header-datos">Meta del proyecto</div>


                                    <div class="row proyectos-informacion">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Buscar" class="form-control" id="inputEmail4" />
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">+ Agregar</button>
                                        </div>

                                    </div>

                                    <div class="card">
                                        <div class="card-body">

                                            <div class="row g-0">
                                                <div class="col-md-12">
                                                    <p class="card-meta-title">Meta  00001</p>
                                                    <div class="row g-0">
                                                        <div class="col-md-6">Fecha de inicio:  </div>     <div class="col-md-6">   01/09/2023</div>
                                                    </div>
                                                    <div class="row g-0">
                                                        <div class="col-md-6">Fecha de fin:   </div>     <div class="col-md-6">02/12/2023</div>
                                                    </div>
                                                    <div class="row g-0">
                                                        <div class="col-md-6">N° de inmuebles:  </div>     <div class="col-md-6">11</div>
                                                    </div>
                                                    <div class="row g-0">
                                                        <div class="col-md-6">Estado:   </div>     <div class="col-md-6">Incompleto</div>
                                                    </div>
                                                    <div class="row g-0">
                                                        <ProgressBar percentage={25} ></ProgressBar>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 ">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title card-header-datos">Meta de proyecto</div>

                                    <form class="row g-3">
                                        <div class="col-md-3">
                                            <label for="inputEmail4" class="form-label">ID</label>
                                            <input type="text" class="form-control" id="inputid"></input>
                                        </div>
                                        <div class="col-md-9">
                                            <label for="inputPassword4" class="form-label">Nombre del proyecto</label>
                                            <input type="text" class="form-control" id="inputPassword4"></input>
                                        </div>
                                         
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Fecha de inicio</label>
                                            <input type="date" class="form-control" id="inputPassword4"></input>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">Fecha de fin</label>
                                            <input type="date" class="form-control" id="inputPassword4"></input>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Numero de inmuebles</label>
                                            <input type="text" class="form-control" id="inputid"></input>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Estado</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Seleccionar...</option>
                                                <option>Completo</option>
                                                <option>Incompleto</option>
                                            </select>
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


function ProgressBar({ percentage }) {
    return (
        <div className="progress">
            <div
                className="progress-bar"
                role="progressbar"
                style={{ width: `${percentage}%` }}
                aria-valuenow={percentage}
                aria-valuemin="0"
                aria-valuemax="100"
            >
                {`${percentage}%`}
            </div>
        </div>
    );
}

export default ProgressBar;
