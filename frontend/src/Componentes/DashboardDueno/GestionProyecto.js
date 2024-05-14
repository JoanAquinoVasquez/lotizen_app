import React from 'react'
import { ProfileMenu, MainNavHorizontal } from '../PerfilIngreso/PerfilIngresoDueno.js';
import { DashboardGestionProyecto } from '../PerfilIngreso/DashboardGestionProyecto.js';



export const GestionProyecto = () => {
  return (
    <div>
        <ProfileMenu></ProfileMenu>
        <MainNavHorizontal></MainNavHorizontal>
        <DashboardGestionProyecto></DashboardGestionProyecto>
    </div>
  )
}
