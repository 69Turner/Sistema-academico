<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Sistema Académico</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-blue-500">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-10 rounded-xl shadow-lg">
            <h1 class="text-4xl font-bold text-blue-600">
                Sistema Académico del Instituto  IESTPH
            </h1>

<P>Programa de Estudio ASPETIC</P>
            <p class="mt-4 text-gray-600">
                Proyecto desarrollado con Laravel y Tailwind CSS.
            </p>
        </div>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Académico IESTPH</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-blue-600 min-h-screen flex flex-col justify-between">

    <!-- Navbar / Barra Superior con Botones -->
    <header class="w-full p-6 flex justify-between items-center max-w-7xl mx-auto">
        <div class="text-white font-bold text-xl tracking-wide">
            IESTPH
        </div>

        <div>
            @if (Route::has('login'))
                <nav class="flex items-center space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" 
                           class="bg-white text-blue-600 hover:bg-gray-100 font-semibold px-4 py-2 rounded-lg shadow transition">
                            Ir al Panel (Dashboard)
                        </a>
                    @else
                        <a href="{{ route('login') }}" 
                           class="text-white hover:text-gray-200 font-medium px-4 py-2 transition">
                            Iniciar Sesión
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" 
                               class="bg-white text-blue-600 hover:bg-gray-100 font-semibold px-4 py-2 rounded-lg shadow transition">
                                Registrarse
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>

    <!-- Contenido Principal (Tarjeta central) -->
    <main class="flex-grow flex items-center justify-center px-4">
        <div class="bg-white rounded-2xl shadow-xl p-8 max-w-2xl w-full text-left">
            <h1 class="text-3xl sm:text-4xl font-extrabold text-blue-600 mb-2">
                Sistema Académico del Instituto IESTPH
            </h1>
            <p class="text-gray-700 font-medium mb-4">
                Programa de Estudio ASPETIC
            </p>
            <p class="text-gray-500 text-sm">
                Proyecto desarrollado con Laravel y Tailwind CSS.
            </p>
        </div>
    </main>

    <!-- Footer opcional -->
    <footer class="py-4 text-center text-white text-sm opacity-80">
        &copy; {{ date('Y') }} IESTPH. Todos los derechos reservados.
    </footer>

</body>
</html>