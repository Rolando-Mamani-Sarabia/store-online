      
      
      
      <form id="form-contacto" method="POST" action="procesar.php" novalidate >
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre" required>

          <label for="correo">Correo electrónico:</label>
          <input type="email" id="correo" name="correo" required>

          <label for="mensaje">Mensaje:</label>
          <textarea id="mensaje" name="mensaje" required></textarea>

          <button type="submit">Enviar mensaje</button>

          <p id="aviso-contacto" class="aviso"> </p>

      </form>