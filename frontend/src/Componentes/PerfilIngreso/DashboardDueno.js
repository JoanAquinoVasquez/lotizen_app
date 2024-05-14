import React from 'react'
import { Link } from 'react-router-dom';
import { IconPlusCircle, IconProject } from '../Icons/iconos2.js';



import './PerfilIngresoDueno.css';
function DashboardDueno() {
  return (
    <div className="MenuDashboardDueno">
      <div className="text-white bg-primary card bienvenida-pag-user-principal" >
        <div className="card-header bienvenida-pag-user">
          ¡Bienvenido de nuevo!
        </div>
      </div>

      <div class="card">
        <div class="card-body">

          <div class="d-grid gap-2 d-md-flex mx-auto">
            <h5 class="card-title">Seleccionar proyecto</h5>


            <div class="input-group justify-content-md-end">

              <div class="input-group-text" id="btnGroupAddon2">
                <input type="text" class="form-control" placeholder="Buscar..." aria-label="Input group example" aria-describedby="btnGroupAddon2" />

                <button class="btn btn-primary" type="button">  Agregar   <IconPlusCircle></IconPlusCircle> </button>
              </div>


            </div>
          </div>

          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col ">
              <div class="card">

                <div class="card-body card-proyectos-avance">
                  <h5 class="card-title"><IconProject></IconProject> Proyecto (nombre) </h5>
                   
                  <p class="avance-proyecto card-text" >Avance: </p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div className="DashboardInicioPrincipal card-group">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card">

              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">

              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">

              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
              </div>
            </div>
          </div>




        </div>
      </div>

    </div>
  );
}

export default DashboardDueno;
