<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Materi Kelas</title>
</head>
<body>
    <div class="container absolute  py-4 mx-auto ">
        @include('partials.navigation')



        <div class="absolute top-24 left-3 container mx-auto p-6 bg-white rounded-lg shadow-lg">
            <h1 class="text-2xl font-semibold mb-6">Create New Dokumentasi</h1>
            <form action="{{ route('dokumentasi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="judul_materi" class="block text-gray-700 font-medium mb-2">Judul Dokumentasi</label>
                    <input type="text" name="nama" required
                           class="w-full px-4 py-2 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="thumbnail_materi" class="block text-gray-700 font-medium mb-2">Thumbnail Dokumentasi</label>
                    <input type="file" name="thumb_dokumen"
                           class="w-full px-4 py-2 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="deskripsi" class="block text-gray-700 font-medium mb-2">Deskripsi</label>
                    <textarea name="deskripsi" required
                              class="w-full px-4 py-2 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                <div class="mb-4">
                    <label for="link_url_materi" class="block text-gray-700 font-medium mb-2">Link URL Dokumentasi</label>
                    <input type="url" name="url" id="url"
                           class="w-full px-4 py-2 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>


                <button type="sumbit" class="w-full mt-2 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Create dokumentasi</button>
            </form>
           
        </div>
</body>
</html>
