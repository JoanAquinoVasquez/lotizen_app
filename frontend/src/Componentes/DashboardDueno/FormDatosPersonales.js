import React from 'react'
import { ProfileMenu, MainNavHorizontal } from '../PerfilIngreso/PerfilIngresoDueno.js';
import { DashboardDatos } from '../PerfilIngreso/DashboardDatos.js';

export const FormDatosPersonales = () => {
  return (
    <div>
        <ProfileMenu></ProfileMenu>
        <MainNavHorizontal></MainNavHorizontal>
        <DashboardDatos></DashboardDatos>
    </div>
  )
}
