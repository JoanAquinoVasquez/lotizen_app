import React from 'react'
import { IconPeopleFill } from '../Icons/iconos2.js'
import './PerfilDuenoDatos.css';
import { useState } from 'react';


export const DashboardVentaAsesor = () => {

    const [items, setItems] = useState([
        { id: 1, nombre: 'Producto 1', precio: 10, cantidad: 1 },
        { id: 2, nombre: 'Producto 2', precio: 15, cantidad: 1 },
        { id: 3, nombre: 'Producto 3', precio: 20, cantidad: 1 }
    ]);

    const calcularTotal = () => {
        return items.reduce((total, item) => total + (item.precio * item.cantidad), 0);
    };

    const actualizarCantidad = (id, cantidad) => {
        const nuevosItems = items.map(item =>
            item.id === id ? { ...item, cantidad } : item
        );
        setItems(nuevosItems);
    };
    return (
        <div>

            <div>

                <div class="row" style={{ paddingLeft: '235px', margin: '2em' }}>
                    <div class="col-sm-12">

                        <div class="card card-datos">

                            <div class="card-body card-header-datos">
                                <IconPeopleFill style={{ marginRight: '0.5rem' }} />
                                Gestion de personal
                            </div>
                        </div>


                        <div>
                            <h1>Boleta de Compra</h1>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {items.map(item => (
                                        <tr key={item.id}>
                                            <td>{item.nombre}</td>
                                            <td>${item.precio}</td>
                                            <td>
                                                <input
                                                    type="number"
                                                    min="1"
                                                    value={item.cantidad}
                                                    onChange={(e) => actualizarCantidad(item.id, parseInt(e.target.value))}
                                                />
                                            </td>
                                            <td>${item.precio * item.cantidad}</td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                            <p>Total: ${calcularTotal()}</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    )
}
