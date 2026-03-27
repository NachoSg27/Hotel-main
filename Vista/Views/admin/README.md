# Panel Admin - Explicacion Simple

Archivo principal:
- `index.php`

## Flujo basico
1. Se inicia sesion con `session_start()`.
2. Si llega formulario POST, se valida usuario y clave.
3. Si credenciales correctas, se activa sesion admin.
4. Si credenciales incorrectas, se muestra mensaje de error.
5. Si el usuario pulsa cerrar, se destruye la sesion.

## Credenciales demo
- Usuario: `admin`
- Clave: `1234`

## Para que sirve este modulo
- Practicar un panel de control basico.
- Entender login y sesion en PHP sin complejidad.
- Tener un punto de administracion simple para exponer en clase.
