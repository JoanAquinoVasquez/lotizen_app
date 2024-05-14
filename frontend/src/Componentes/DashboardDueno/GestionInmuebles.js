import React from 'react'

import { ProfileMenu, MainNavHorizontal } from '../PerfilIngreso/PerfilIngresoDueno.js';
import { DashboardInmueble } from '../PerfilIngreso/DashboardInmueble.js';



export const GestionInmuebles = () => {
  return (
    <div>

<ProfileMenu></ProfileMenu>
        <MainNavHorizontal></MainNavHorizontal>
        <DashboardInmueble></DashboardInmueble>
    </div>
  )
}
