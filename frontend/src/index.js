import React from 'react';
import ReactDOM from 'react-dom/client';
import { BrowserRouter } from 'react-router-dom';
import './index.css';
import Inicio from './App';
import reportWebVitals from './reportWebVitals';

import { MainNavHorizontal, ProfileMenu } from './Componentes/PerfilIngreso/PerfilIngresoDueno';
import { PerfilDuenoDatos } from './Componentes/PerfilIngreso/PerfilIngresoDueno'; 
import DashboardDuenoInicio from './Componentes/DashboardDueno/DashboardDuenoInicio';
import { VentaAsesor } from './Componentes/DashboardAsesor/VentaAsesor.js';

import 'bootstrap/dist/css/bootstrap.min.css';

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <BrowserRouter>
      <Inicio /> 
       <VentaAsesor></VentaAsesor>
</BrowserRouter>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
