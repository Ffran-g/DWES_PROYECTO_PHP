# Requisitos: Tailwind CSS

Este proyecto utiliza **[Tailwind CSS](https://tailwindcss.com/)** para los estilos.  
Antes de ejecutar o compilar el proyecto, asegúrate de tener **Tailwind** configurado correctamente.

---

## Instalación de Tailwind CSS

Si **ya tienes Tailwind instalado**, puedes omitir este paso.  
En caso contrario, sigue estos pasos para instalarlo:

### 1️ Inicializa tu proyecto con npm
Si tu proyecto no tiene un archivo `package.json`, crea uno ejecutando:

```bash
npm init -y
```
### 2 Instalar Tailwind CSS
Ejecuta el siguiente comando:

```bash
npm install -D tailwindcss
```

### 3 Generar archivo configuración
Ejecuta el siguiente comando:

```bash
npx tailwindcss init
```
*Esto creará un archivo llamado **tailwind.config.js***

## Configuración básica
Edita tu archivo **tailwind.config.js** para indicar donde buscar las clases de Tailwind:

```js
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.html", "./src/**/*.{html,js}"],
  theme: {
    extend: {},
  },
  plugins: [],
};
```
Crea un archivo CSS base, por ejemplo en **src/input.css**, con lo siguiente:

```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```
## Compilar Tailwind
Para generar el CSS final que usará el proyecto, ejecuta:

```bash
npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch
```
Esto compilará Tailwind y creará el archivo **output.css** dentro de la carpeta **dist**.
Puedes enlazar ese archivo en tu HTML con:

```html
<link rel="stylesheet" href="./dist/output.css">
```