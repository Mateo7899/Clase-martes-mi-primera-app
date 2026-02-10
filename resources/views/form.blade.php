<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Formulario de contacto</title>
  <style>
    body { font-family: system-ui, Arial, sans-serif; margin: 0; padding: 24px; background: #f6f7fb; }
    .card { max-width: 520px; margin: 0 auto; background: #fff; padding: 20px; border-radius: 12px; box-shadow: 0 8px 24px rgba(0,0,0,.08); }
    label { display: block; margin-top: 12px; font-weight: 600; }
    input, textarea {
      width: 100%; margin-top: 6px; padding: 10px 12px;
      border: 1px solid #d9dce3; border-radius: 10px; font-size: 16px;
      outline: none;
    }
    input:focus, textarea:focus { border-color: #6b7cff; box-shadow: 0 0 0 3px rgba(107,124,255,.18); }
    button {
      margin-top: 14px; width: 100%; padding: 12px 14px;
      border: 0; border-radius: 10px; font-size: 16px; font-weight: 700;
      background: #6b7cff; color: white; cursor: pointer;
    }
    button:hover { filter: brightness(0.95); }
    .hint { font-size: 13px; color: #6b7280; margin-top: 8px; }
  </style>
</head>
<body>
  <form class="card" action="#" method="post">
    <h2>Contáctanos</h2>

    <label for="email">Correo</label>
    <input
      id="email"
      name="email"
      type="email"
      placeholder="tu@correo.com"
      required
      autocomplete="email"
    />

    <label for="mensaje">Mensaje</label>
    <textarea
      id="mensaje"
      name="mensaje"
      placeholder="Escribe tu mensaje aquí..."
      rows="5"
      required
      minlength="5"
    ></textarea>

    <button type="submit">Enviar</button>
    <p class="hint">Esto solo es el HTML. Para enviar de verdad necesitas un backend o un servicio.</p>
  </form>
</body>
</html>
