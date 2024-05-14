import React from 'react'
import { ProfileMenu, MainNavHorizontal } from '../PerfilIngreso/PerfilIngresoDueno.js';
import { DashboardMetas } from '../PerfilIngreso/DashboardMetas.js';


export const GestionMetas = () => {
  return (
    <div>
            <ProfileMenu></ProfileMenu>
        <MainNavHorizontal></MainNavHorizontal>
        <DashboardMetas></DashboardMetas>

    </div>
  )
}
