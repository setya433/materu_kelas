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
    <div class="container absolute mx-auto  py-4">
        @include('partials.navigation')
        


        <div class="absolute top-24 left-3 container mx-auto p-6 bg-white rounded-lg shadow-lg">
            <h1 class="text-2xl font-semibold mb-6">Create New Materi</h1>
            <form action="{{ route('materi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="judul_materi" class="block text-gray-700 font-medium mb-2">Judul Materi</label>
                    <input type="text" name="judul_materi" required
                           class="w-full px-4 py-2 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="thumbnail_materi" class="block text-gray-700 font-medium mb-2">Thumbnail Materi</label>
                    <input type="file" name="thumbnail_materi"
                           class="w-full px-4 py-2 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="deskripsi" class="block text-gray-700 font-medium mb-2">Deskripsi</label>
                    <textarea name="deskripsi" required
                              class="w-full px-4 py-2 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="mb-4">
                    <label for="tanggal_upload" class="block text-gray-700 font-medium mb-2">Tanggal Upload</label>
                    <input type="date" name="tanggal_upload" required
                           class="w-full px-4 py-2 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="link_url_materi" class="block text-gray-700 font-medium mb-2">Link URL Materi</label>
                    <input type="url" name="link_url_materi"
                           class="w-full px-4 py-2 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label for="file">File Materi</label>
                    <input type="file" name="file_path" id="file" required class="w-full px-4 py-2 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <button type="submit" class="w-full mt-2 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Create Materi</button>
            </form>
            @include('partials.copyright')

        </div>
        

</body>
</html>
