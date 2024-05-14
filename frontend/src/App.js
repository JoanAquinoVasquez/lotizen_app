import './App.css';
import './Componentes/PerfilIngreso/PerfilIngresoDueno.css'
import React from 'react';
import { BrowserRouter, Link, Routes, Route, Outlet  } from 'react-router-dom';
import { InicioDueno } from './Componentes/InicioDueno';


function Inicio(){
  return (
    <div>
    


            <Outlet />
      </div>
      

  );
}

function PerfilIngresoDueno({ type }) {
  return (
    <div className="flex h-screen bg-gray-100">
      <div className="nav justify-content-end">
        <nav className="navbar justify-content-end navbar-light bg-light">
          <div className="container-fluid">
            <form className="d-flex">
              <input className="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
              <button className="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
          </div>

          <nav aria-label="Page navigation example">
            <ul className="pagination justify-content-end">
              <li className="page-item disabled">
                <a className="page-link">Previous</a>
              </li>
              <li className="page-item"><a className="page-link" href="#">Usuario: {type}</a></li>
              <li className="page-item">
                <a className="page-link" href="#"> <i className="settings bi bi-gear"></i> </a>
              </li>
            </ul>
          </nav>
        </nav>
      </div>
    </div>
  );
}



function MainNavHorizontal() {
  return (

    <div className="MenuDashboard  bg-black p-4 shadow-md">
      <img className="LogoLotizen-Dashboard" src="..\images\login\logo-lotizen-log.jpeg" alt="Lotizen Logo" />
      <nav>
        <ul>
          <li className="mb-2">
            <Link className="text-gray-700 hover:text-blue-500" href="#">
              Dashboard
            </Link>
          </li>
          <li className="mb-2">
            <Link className="text-gray-700 hover:text-blue-500" href="#">
              Sales
            </Link>
          </li>
          <li className="mb-2">
            <Link className="text-gray-700 hover:text-blue-500" href="#">
              Users
            </Link>
          </li>
          <li className="mb-2">
            <Link className="text-gray-700 hover:text-blue-500" href="#">
              Revenue
            </Link>
          </li>
          <li className="mb-2">
            <Link className="text-gray-700 hover:text-blue-500" href="#">
              Traffic
            </Link>
          </li>
          <li className="mb-2">
            <Link className="text-gray-700 hover:text-blue-500" href="#">
              Products
            </Link>
          </li>
          <li className="mb-2">
            <Link className="text-gray-700 hover:text-blue-500" href="#">
              Satisfaction
            </Link>
          </li>
        </ul>
      </nav>
    </div>


  );
}




function App() {
  return (
    <React.StrictMode>
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<Inicio />} />
          <Route path="/iniciodueno/*" element={<InicioDueno />} />
        </Routes>
      </BrowserRouter>
    </React.StrictMode>
  );
}


export default Inicio;
