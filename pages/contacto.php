<div class="wrapper col3">
        <div id="breadcrumb">
            <ul>
                <li class="first">Tú estás aquí</li>
                <li>&#187;</li>
                <li><a href="#">Inicio</a>
                </li>
                <li>&#187;</li>
                <li class="current"><a href="#">Contáctanos</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="wrapper col5">
        <div id="container">
            <h1>Formulario de contacto</h1>
            <form id="contacto" onsubmit="return validar()">
                <fieldset>
                    <label for="nombre">Nombre y Apellidos</label>
                    <input id="nombre" name="nombre" type="text" value="" placeholder="Introduce tu Nombre" />
                    <p>
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" value="" placeholder="Introduce tu Email" />
                    </p>

                </fieldset>
                <fieldset>
                    <p>
                        <label for="cuestion">Cuestión o información a solicitar</label>
                    </p>
                    <textarea rows="12" id="cuestion" name="cuestion" cols="55" placeholder="Introduce tu cuestión"></textarea>
                    <p>
                </fieldset>
                <div id="contacto-notification" class="" style="display:none">
                    Mensaje de prueba
                </div>
                <input type="submit" value="Enviar" class="btn-enviar">
                <input type="reset" value="Limpiar" class="btn-enviar">
                </p>
            </form>
        </div>
    </div>

