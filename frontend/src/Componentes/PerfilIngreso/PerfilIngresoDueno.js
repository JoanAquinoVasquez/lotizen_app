import React from 'react'
import { Link } from 'react-router-dom';
import './PerfilIngresoDueno.css';
import { useState } from 'react';
import { IconDashboard, IconLogoutCircleRFill, IconNotificationsOutline, IconSearch } from '../Icons/iconos.js';



function ProfileMenu() {
  const [isMenuVisible, setMenuVisible] = useState(false);

  const toggleProfileMenu = () => {
    setMenuVisible(!isMenuVisible);
  };

  return (
    <div>

      <nav class="MenuHorizontal navbar navbar-expand-lg navbar-light bg-light">

        <div class="container-fluid">
          <form class="d-flex">
            <input type="search" class="botonBuscar " placeholder="Buscar..." aria-label="Search" />
            <button class="btn-outline-light" type="submit"><IconSearch /></button>
            <button class="btn-outline-light" type="submit"><IconNotificationsOutline /></button>
          </form>

          <div class="PerfilUsuario collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="TextoUsuario nav-link active" href="#">Nombre de usuario</a>
                <button class=" btn" type="submit"><img className="botonajuste" src="..\images\login\ajustes.png" /></button>
              </li>
            </ul>

          </div>
        </div>
      </nav>


    </div>
  );
}



function MainNavHorizontal() {
  return (

    <div className="MenuDashboard  bg-black p-4 shadow-md">
      <div className="logo-dashboard">
        <span class="navbar-toggler-icon"></span>
        <img className="LogoLotizen-Dashboard" src="..\images\login\logo-lotizen-log.jpeg" alt="Lotizen Logo" />
      </div>
      <nav>
        <ul>
          <li className="mb-2">
            <IconDashboard />
            <Link className="dashboard-menu-principal text-gray-700 hover:text-blue-500" href="#">
              Dashboard
            </Link>
          </li>
          <li className="mb-2">
            <Link className="dashboard-menu text-gray-700 hover:text-blue-500" href="#">
              Gestión de proyecto
            </Link>
          </li>
          <li className="mb-2">
            <Link className="dashboard-menu text-gray-700 hover:text-blue-500" href="#">
              Gestión de inmuebles
            </Link>
          </li>
          <li className="mb-2">
            <Link className="dashboard-menu text-gray-700 hover:text-blue-500" href="#">
              Gestión personal
            </Link>
          </li>
          <li className="mb-2">
            <Link className="dashboard-menu text-gray-700 hover:text-blue-500" href="#">
              Gestión metas
            </Link>
          </li>
          <li className="mb-2">
            <Link className="dashboard-menu hover:text-blue-500" href="#">
              Gestión reportes
            </Link>
          </li>
          <li className="mb-2">
            <Link className="dashboard-menu text-gray-700 hover:text-blue-500" href="#">
              Gestión solicitud financiamiento
            </Link>
          </li>
          <li className="mb-2">
            <Link className="dashboard-menu text-gray-700 hover:text-blue-500" href="#">
              Mi perfil
            </Link>
          </li>


          <li>
            <Link className="dashboard-menu-logout text-gray-700 hover:text-blue-500" href="#">
              <IconLogoutCircleRFill />
              Log out
            </Link>
          </li>


        </ul>

      </nav>
    </div>


  );
}




export { MainNavHorizontal, ProfileMenu,  };

