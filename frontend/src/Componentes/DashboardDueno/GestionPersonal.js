import React from 'react'
import { ProfileMenu, MainNavHorizontal } from '../PerfilIngreso/PerfilIngresoDueno.js';
import { DashboardPersonal } from '../PerfilIngreso/DashboardPersonal.js';


export const GestionPersonal = () => {
  return (
    <div>
        <ProfileMenu></ProfileMenu>
        <MainNavHorizontal></MainNavHorizontal>
        <DashboardPersonal></DashboardPersonal>
    </div>
  )
}
