{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Materi Kelas</title>
</head>
<body class="bg-black">
    <div class="relative">
        <div class="absolute top-0 left-0 text-5xl font-bold text-yellow-50 pt-3 pl-[15px]">Maxilaris</div>
        <div class="absolute top-6 right-[730px]">
            <a href="home" class="text-3xl font-bold text-yellow-50 hover:text-gray-500 hover:scale-105 transition-all duration-200">Home</a>
        </div>
        <div class="absolute top-6 right-[530px]">
            <a href="perizinan" class="text-3xl font-bold text-yellow-50 hover:text-gray-500 hover:scale-105 transition-all duration-200">Perizinan</a>
        </div>
        <div class="absolute top-6 right-[250px]">
            <a href="documentation" class="text-3xl font-bold text-yellow-50 hover:text-gray-500 hover:scale-105 transition-all duration-200">Documentation</a>
        </div>
        <div class="absolute top-6 right-[100px]">
            <a href="/materi" class="text-3xl font-bold text-yellow-50 hover:text-gray-500 hover:scale-105 transition-all duration-200">Materi</a>
        </div>
    </div>

    <div class="absolute top-[80PX] left-0 container p-4">
        <img src="https://images.hdqwalls.com/wallpapers/bthumb/nexus-space-digital-universe-4k-rt.jpg" alt="Deskripsi Gambar" class="bg-black opacity-95 shadow-lg w-full h-[450px] object-cover rounded-lg" />
        <div class="absolute top-[80px] left-[50px] text-9xl font-bold text-yellow-50 ">Maxilaris</div>
        <div class="container max-w-[690px] absolute top-[230px] left-[55px] text-[14px] font-bold text-yellow-50">Lorem ipsum odor amet, consectetuer adipiscing elit. Semper interdum non fermentum rhoncus aliquam et erat vulputate. Dignissim lectus diam erat tellus tincidunt. Lobortis quis adipiscing nunc nisl sit massa nec lobortis? Odio semper maximus sagittis inceptos congue conubia libero. Luctus fermentum et luctus feugiat himenaeos nisi. Donec porta erat donec aliquet curabitur ornare molestie hendrerit. Quisque nam eleifend himenaeos elementum libero auctor? Nisl integer in sed magna est ac iaculis. Metus pretium porta tempus dapibus dignissim tellus ex consectetur.</div>
        <div class="absolute top-[400px] left-[55px] text-[14px] font-bold text-yellow-50">CP : xxxxxxxxxx</div>
        <div class="absolute top-[430px] left-[55px] text-[14px] font-bold text-yellow-50">Email : email@gmail.com</div>
    </div>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Materi Kelas</title>
</head>
<body >
    <div class="relative">
        <div class="absolute top-0 left-0 text-5xl font-bold text-black-50 pt-3 pl-[15px]">Maxilaris</div>
        <div class="absolute top-6 right-[730px]">
            <a href="home" class="text-3xl font-bold text-black-50 hover:text-gray-500 hover:scale-105 transition-all duration-200">Home</a>
        </div>
        <div class="absolute top-6 right-[530px]">
            <a href="perizinan" class="text-3xl font-bold text-black-50 hover:text-gray-500 hover:scale-105 transition-all duration-200">Perizinan</a>
        </div>
        <div class="absolute top-6 right-[250px]">
            <a href="dokumentasi" class="text-3xl font-bold text-black-50 hover:text-gray-500 hover:scale-105 transition-all duration-200">Dokumentasi</a>
        </div>
        <div class="absolute top-6 right-[100px]">
            <a href="/materi" class="text-3xl font-bold text-black-700 hover:text-gray-500 hover:scale-105 transition-all duration-200">Materi</a>
        </div>
    </div>

    <div class="absolute top-[150PX] left-0 container p-4">
        {{-- <div class="w-3/4">
            <h1 class="text-2xl font-bold">{{$title}}</h1>
            <h1 class="text-2xl font-bold">test</h1>

        </div> --}}

        {{-- @if (!$materi)
            <div class="w-1/4">
                <label class="sr-only" for="inlineFormInputGroup">Cari Buku</label>
                <div class="relative">
                    <input wire:model="search" type="text" class="form-input border border-gray-300 rounded-lg px-4 py-2 w-full" id="inlineFormInputGroup" placeholder="Cari Buku">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                        <button class="bg-gray-200 p-2 rounded-full">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        @endif
    </div> --}}


        @if ($dokumentasi->isNotEmpty())
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($dokumetasi as $item)
                    <div class="card mb-4 shadow cursor-pointer"  >
                        {{-- <img src="/storage/{{$item->sampul}}" class="card-img-top w-full h-auto rounded-lg" alt="{{$item->judul}}"> --}}
                        <div class="container relative card-body p-4">
                            {{-- <a href="{{ route('materi.show', $item->id) }}" target="_blank"> --}}
                            <div class="w-full md:w-full">
                                <img src="{{ asset('storage/' . $item->thum_dokumen) }}" alt="{{ $item->nama }}" class="w-72 h-24 object-cover">
                            </div>
                            <h5 class="text-lg font-bold">{{$item->nama}}</h5>
                            <p class="text-gray-600">{{$item->deskripsi}}</p>

                            {{-- <div class='container m-7 absolute'>
                                <p class="text-gray-400 absolute bottom-0 ">{{$item->tanggal_upload}}</p>
                            </div> --}}
                        </a>
                        </div>

                    </div>

                @endforeach
            </div>

            <div class="flex justify-center">
                {{-- {{$buku->links()}} --}}
            </div>
        @else
            <div class="alert alert-danger">
                dokumentasi tidak ada
            </div>

    @endif


</div>
</body>
</html>
