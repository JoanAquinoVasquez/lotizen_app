import React from 'react';
import { Link } from 'react-router-dom';
import './PerfilDuenoDatos.css';
import { useState } from 'react';


function FormDuenoPerfil() {
    return (
        <div>
            <div className="DatosPersonales ">

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"/> 
                        <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password"/>
                        <label for="floatingPassword">Password</label>
                </div>

            </div>
        </div>
    );
}