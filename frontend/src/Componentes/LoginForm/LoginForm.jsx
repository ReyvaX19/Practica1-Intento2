import React from "react";
import './LoginForm.css';

const LoginForm = () => {
    return(
        <div className='wrapper'>
            <form action="">
                <h1>Bienvenida(o)</h1>
                <h2>Login</h2>
                <div className="input-box">
                    <input type="text" 
                    placeholder="Correo" required/>
                </div>
                <div className="input-box">
                    <input type="password" 
                    placeholder="Contraseña" required/>
                </div>
                
                <div className="remember-forgot">
                    <label><input type="checkbox" />Recuerdame</label>
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
                
                <button type="submit">Entrar</button>

                <div className="register-link">
                    <p>¿Nuevo aquí? <a href="#">Regístrate!</a> </p>
                </div>

            </form>
        </div>
    )
};
export default LoginForm;