import React from 'react';
import { ProfileMenu, MainNavHorizontal } from '../PerfilIngreso/PerfilIngresoDueno';
import DashboardDueno from '../PerfilIngreso/DashboardDueno';

const DashboardDuenoInicio = () => (
    <div>
        <MainNavHorizontal></MainNavHorizontal>
        <ProfileMenu></ProfileMenu>
        <DashboardDueno></DashboardDueno>
    </div>
);

export default DashboardDuenoInicio;
