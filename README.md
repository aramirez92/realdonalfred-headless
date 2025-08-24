
# RealDonAlfred Headless WordPress Theme

Un tema de WordPress completamente headless diseñado para sitios que utilizan WordPress como CMS/API backend mientras el frontend se ejecuta en una aplicación separada.

## Acerca del Tema

Este tema headless está diseñado específicamente para sitios web que utilizan **WordPress como CMS backend** mientras el frontend se ejecuta en una aplicación separada (React, Vue, Angular, Next.js, etc.). 

### Características Principales

- **🚫 Sin Interfaz Visual**: El tema oculta completamente cualquier contenido visual del frontend de WordPress
- **🔌 API-First**: Optimizado para funcionar exclusivamente a través de la REST API de WordPress
- **⚡ Ultra Ligero**: CSS y JavaScript mínimos para máximo rendimiento
- **🛡️ Seguro**: Desactiva feeds RSS, comentarios y funciones innecesarias para uso headless
- **🎯 Enfoque CMS**: WordPress funciona únicamente como sistema de gestión de contenido

### ¿Cuándo usar este tema?

- Cuando tu frontend está construido con frameworks modernos (React, Vue, Angular)
- Para aplicaciones JAMstack que consumen datos de WordPress
- Sitios que requieren interfaces de usuario completamente personalizadas
- Proyectos que necesitan separación total entre backend y frontend

### Lo que NO hace este tema

- No proporciona ninguna interfaz visual para visitantes
- No incluye patrones o plantillas de bloques
- No está diseñado para sitios web tradicionales de WordPress

## Instalación y Configuración

### Instalación del Tema

1. **Descarga el tema**: Clona o descarga este repositorio en tu directorio `/wp-content/themes/`
2. **Activa el tema**: Ve a `Apariencia > Temas` en tu panel de WordPress y activa "RealDonAlfred Headless"
3. **Verifica la instalación**: Visita tu sitio web - deberías ver la página de bienvenida headless

### Configuración para Uso Headless

#### 1. Configurar WordPress como API

Asegúrate de que la REST API esté habilitada (viene por defecto en WordPress 4.7+):

```bash
# Verificar que la API funciona
curl https://tu-sitio.com/wp-json/wp/v2/posts
```

#### 2. Configurar Permalinks

Ve a `Configuración > Enlaces permanentes` y selecciona cualquier opción que no sea "Simple" para que la API funcione correctamente.

#### 3. Instalar Plugins Recomendados (Opcional)

- **JWT Authentication**: Para autenticación en tu frontend
- **WP REST API Controller**: Para mayor control sobre los endpoints
- **Advanced Custom Fields (ACF)**: Para campos personalizados expuestos en la API

#### 4. Configurar CORS (si es necesario)

Si tu frontend está en un dominio diferente, agrega esto a tu `wp-config.php`:

```php
// Permitir CORS para tu dominio frontend
define('ALLOW_UNFILTERED_UPLOADS', true);
header('Access-Control-Allow-Origin: https://tu-frontend.com');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Authorization, Content-Type');
```

### Desarrollo Local

Para desarrollo local recomendamos:

1. **Local by Flywheel** o **XAMPP** para el entorno WordPress
2. **Tu framework frontend preferido** (React, Vue, Angular, etc.) en un puerto diferente
3. **Postman** o **Insomnia** para probar los endpoints de la API

## Uso de la API REST

### Endpoints Principales

Una vez instalado el tema, tienes acceso completo a la REST API de WordPress:

#### Posts y Páginas
```bash
# Obtener todos los posts
GET /wp-json/wp/v2/posts

# Obtener un post específico
GET /wp-json/wp/v2/posts/{id}

# Obtener todas las páginas
GET /wp-json/wp/v2/pages

# Obtener página específica
GET /wp-json/wp/v2/pages/{id}
```

#### Medios y Archivos
```bash
# Obtener archivos multimedia
GET /wp-json/wp/v2/media

# Obtener archivo específico
GET /wp-json/wp/v2/media/{id}
```

#### Categorías y Etiquetas
```bash
# Obtener categorías
GET /wp-json/wp/v2/categories

# Obtener etiquetas
GET /wp-json/wp/v2/tags
```

### Ejemplo de Integración con React

```javascript
// Ejemplo básico para obtener posts
const fetchPosts = async () => {
  try {
    const response = await fetch('https://tu-sitio.com/wp-json/wp/v2/posts');
    const posts = await response.json();
    return posts;
  } catch (error) {
    console.error('Error fetching posts:', error);
  }
};

// Usar en componente React
useEffect(() => {
  fetchPosts().then(posts => {
    setPosts(posts);
  });
}, []);
```

### Funcionalidades Deshabilitadas

Este tema desactiva automáticamente:

- ✅ Feeds RSS (no necesarios en headless)
- ✅ Sistema de comentarios completo
- ✅ Scripts de emoji innecesarios
- ✅ Meta tags innecesarias en wp_head
- ✅ Enlaces de shortlink y RSD

### Personalización

Si necesitas habilitar alguna funcionalidad específica, puedes modificar el archivo `functions.php` comentando las líneas correspondientes.


## Requisitos del Sistema

- **WordPress**: 6.6+ (recomendado 6.7+)
- **PHP**: 7.2.24 o superior
- **Servidor web**: Apache o Nginx
- **Base de datos**: MySQL 5.6+ o MariaDB 10.1+
- **Licencia**: [GPLv2](http://www.gnu.org/licenses/gpl-2.0.html) o posterior

### Para el Frontend (tu aplicación)

- Framework de tu elección (React, Vue, Angular, Next.js, Nuxt.js, etc.)
- Cliente HTTP para consumir la API (Axios, Fetch API, etc.)
- Opcional: Herramientas de autenticación JWT

## Pruebas y Desarrollo

### Verificar que todo funciona

1. **Verifica la instalación del tema**: Visita tu sitio, deberías ver la página de bienvenida headless
2. **Prueba la API REST**: 
   ```bash
   curl https://tu-sitio.com/wp-json/wp/v2/posts
   ```
3. **Verifica que no hay contenido visual**: El frontend debe estar completamente oculto

### Herramientas Recomendadas

- **Postman** o **Insomnia**: Para probar endpoints de la API
- **WP-CLI**: Para gestión desde línea de comandos
- **JWT Authentication Plugin**: Para autenticación en tu frontend

## Recursos Útiles

- [WordPress REST API Handbook](https://developer.wordpress.org/rest-api/)
- [Configurar entorno de desarrollo](https://developer.wordpress.org/block-editor/handbook/tutorials/devenv/)
- [Documentación de theme.json](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/)
- [Guía de WordPress Headless](https://developer.wordpress.org/apis/)

## Soporte

**Desarrollado por**: [@RealDonAlfred](https://www.instagram.com/realdonalfred/)

**Redes sociales**:
- [Instagram](https://www.instagram.com/realdonalfred/)
- [X (Twitter)](https://x.com/realdonalfred)
- [YouTube](https://www.youtube.com/@realdonalfred)

---

**Versión**: 1.0  
**Autor**: Alfredo Ramirez  
**Licencia**: GPL v2 o posterior
