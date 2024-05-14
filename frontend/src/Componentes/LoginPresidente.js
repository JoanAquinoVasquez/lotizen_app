import React from 'react';
import { BrowserRouter, Route, Routes, Link } from 'react-router-dom';
import './LoginPresidente.css'

function LoginPresidente({ type }) {
  return (
    <div>
      <div className="App">
        <header className="App-header">
          <div className="SectionLogin">
            <div>
              <img className='LoginImagenLotizen' src="..\images\login\login-users.jpg" alt="Login Users" />
            </div>
            <div className='PerfilUser'>
              <div className="Heading">{type}</div>
              <img className="LogoLotizen" src="..\images\login\logo-lotizen-log.jpeg" alt="Lotizen Logo" />
              <div className="UserLoginContainer">
                <div className="mx-auto max-w-md px-4 py-8">
                  <form className="space-y-4">
                    <div className="space-y-2">
                      <label htmlFor="email" className='labelLogin fw-bold'>Usuario</label>
                      <input id="email" placeholder="lotizen@egmail.com" required type="email" />
                    </div>
                    <div className="space-y-2">
                      <label htmlFor="password" className='labelLogin fw-bold'>Password</label>
                      <input id="password" required type="password" />
                    </div>

                    <div class="d-grid mx-auto">
                      <button className="ButtonLogin btn btn-primary btn-lg" type="submit">
                        <Link to="/Presidente/Inicio"> Login</Link>
                      </button>

                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </header>
      </div>
    </div>
  );
}


export default LoginPresidente;  