
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
    <div class="py-4">
        @include('partials.navigation')

    <div class="container absolute top-[70px] left-8 m-4">
        <a href="/dokumentasi/create"
            class="inline-block px-6 py-2.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg transition duration-150 ease-in-out">
            Buat Dokumentasi
        </a>
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
                @foreach ($dokumentasi as $item)
                    <div class="card mb-4 shadow cursor-pointer"  >
                        {{-- <img src="/storage/{{$item->sampul}}" class="card-img-top w-full h-auto rounded-lg" alt="{{$item->judul}}"> --}}
                        <div class="container relative card-body p-4">
                            
                            <a href="{{($item->url) }}" target="_blank">
                            <div class="w-full md:w-full">
                                <img src="{{ asset('storage/' . $item->thumb_dokumen) }}" alt="{{ $item->nama }}" class="w-72 h-24 object-cover">
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

    @include('partials.copyright')
</div>
</body>
</html>
