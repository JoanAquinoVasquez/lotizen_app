import React from 'react'
import { ProfileMenu, MainNavHorizontal } from '../PerfilIngreso/PerfilIngresoDueno.js';
import { DashboardVentaAsesor } from '../PerfilIngreso/DashboardVentaAsesor.js';

export const VentaAsesor = () => {
  return (
    <div> 
        <MainNavHorizontal></MainNavHorizontal>
        <ProfileMenu></ProfileMenu>
        <DashboardVentaAsesor></DashboardVentaAsesor>


    </div>
  )
}
