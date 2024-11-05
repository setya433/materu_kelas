<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Materi Kelas</title>
</head>
<body">
    <header class=" py-4">
        @include('partials.navigation')
    </header>

    <main class="container mx-auto px-4 mt-4">
        <div class="relative">
            <img src="{{ asset('images/bg.jpg') }}" alt="Deskripsi Gambar" class="w-full h-[200px] sm:h-[300px] md:h-[450px] object-cover rounded-lg shadow-lg opacity-90" />
            <div class="absolute top-4 sm:top-8 md:top-16 left-2 sm:left-4 md:left-8 text-3xl sm:text-5xl md:text-9xl font-bold text-yellow-50">Maxilaris</div>
            <div class="absolute top-[100px] sm:top-[180px] md:top-[230px] left-2 sm:left-4 md:left-8 max-w-[200px] sm:max-w-[500px] md:max-w-[690px] text-xs sm:text-sm md:text-[14px] font-bold text-yellow-50 leading-relaxed">
                Lorem ipsum odor amet, consectetuer adipiscing elit. Semper interdum non fermentum rhoncus aliquam et erat vulputate. Dignissim lectus diam erat tellus tincidunt. 
                Lobortis quis adipiscing nunc nisl sit massa nec lobortis? Odio semper maximus sagittis inceptos congue conubia libero. Luctus fermentum et luctus feugiat himenaeos nisi. 
                Donec porta erat donec aliquet curabitur ornare molestie hendrerit.
            </div>
            <div class="absolute top-[200px] sm:top-[300px] md:top-[400px] left-2 sm:left-4 md:left-8 text-xs sm:text-sm md:text-[14px] font-bold text-yellow-50">
                CP : xxxxxxxxxx
            </div>
            <div class="absolute top-[220px] sm:top-[330px] md:top-[430px] left-2 sm:left-4 md:left-8 text-xs sm:text-sm md:text-[14px] font-bold text-yellow-50">
                Email : email@gmail.com
            </div>
        </div>

        @include('partials.copyright')
        
    </main>
</body>
</html>
