import React from 'react'
import './PerfilDuenoDatos.css';
import { IconPersonFill } from '../Icons/iconos2.js';
export const DashboardDatos = () => {
    return (
        <div>
            <div class="row" style={{ paddingLeft: '235px', margin: '2em' }}>
                <div class="col-sm-12">
                    <div class="card card-datos">

                        <div class="card-body card-header-datos">
                            <IconPersonFill style={{ marginRight: '0.5rem' }} />
                            Datos Personles
                        </div>

                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body card-header-datos">

                            Datos Generales
                        </div>
                        <div class="card-body">
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Nombres</label>
                                    <input type="text" class="form-control" id="validationCustom01" />

                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control" id="validationCustom02" value="Otto" required />
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="validationCustom04" class="form-label">Documento de identidad</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Seleccionar...</option>
                                        <option value="1">DNI</option>
                                        <option value="2">Pasaporte </option>
                                        <option value="3">Carnet Extranjeria</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid state.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="validationCustom01" class="form-label">Numero de documento</label>
                                    <input type="text" class="form-control" id="validationCustom01" />

                                </div>

                                <div class="col-md-6">
                                    <label for="validationCustom01" class="form-label">Teléfono</label>
                                    <input type="text" class="form-control" id="validationCustom01" />

                                </div>

                                <div class="col-md-6">
                                    <label for="validationCustom01" class="form-label">Usuario</label>
                                    <input type="text" class="form-control" id="validationCustom01" />
                                </div>

                                <hr className="separador" />

                                <div class="card-body card-header-datos">

                                    Credenciales
                                </div>

                                <div class="col-md-7">
                                    <label for="exampleInputEmail1" class="form-label">Email </label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></input>
                                    <div id="emailHelp" class="form-text"> </div>

                                </div>

                                <div class="col-md-5">
                                    <label for="formFile" class="form-label">Foto de perfil</label>
                                    <input class="form-control" type="file" id="formFile"></input>
                                </div>


                                <div class="col-md-7">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"></input>
                                </div>

                                <a href="#" class="btn btn-primary">GUARDAR CAMBIOS</a>

                            </form>




                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body card-header-datos">

                            Empresa
                        </div>
                        <div class="card-body">
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-md-5">
                                    <label for="validationCustom01" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="validationCustom01" />

                                </div>
                                <div class="col-md-7">
                                    <label for="validationCustom02" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="validationCustom02" value="" required />
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>


                                <div class="col-md-5">
                                    <label for="validationCustom01" class="form-label">RUC</label>
                                    <input type="text" class="form-control" id="validationCustom01" />

                                </div>


                                <div class="col-md-7">
                                    <label for="exampleInputEmail1" class="form-label">Email </label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></input>
                                    <div id="emailHelp" class="form-text"> </div>

                                </div>

                                <div class="col-md-12">
                                    <label for="formFile" class="form-label">Logo</label>
                                    <input class="form-control" type="file" id="formFile"></input>
                                </div>

                                <div class="col-md-12">
                                    <label for="formFile" class="form-label"></label>
                                     
                                </div>

                                <div class="col-md-12">
                                    <label for="formFile" class="form-label"></label>
                                     
                                </div>



                                <hr className="separador" />

                                <div class="card-body card-header-datos">

                                    Rubro
                                </div>



                                <div class="col-md-12">
                                    <label for="formFile" class="form-label">Nombre</label>
                                    <input class="form-control" type="text" id="formFile"></input>
                                </div>


                                <div class="col-md-12">
                                    <label for="exampleInputPassword1" class="form-label">Descripción</label>
                                    <input class="form-control" type="text" id="formFile"></input>
                                </div>

                                <a href="#" class="btn btn-primary">GUARDAR CAMBIOS</a>

                            </form>








                        </div>
                    </div>
                </div>



            </div>
        </div>



    )
}
