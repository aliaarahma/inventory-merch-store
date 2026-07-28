<!DOCTYPE html>
<html>
<head>
    <title>Buat Pesanan</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">
    <h1 class="text-2xl font-bold mb-4">Buat Pesanan Baru</h1>

    <form action="/orders" method="POST" class="bg-white p-6 rounded shadow max-w-2xl">
        @csrf

        <label class="block mb-1 font-semibold">Atas Nama:</label>
        <input type="text" name="nama_pemesan" placeholder="Nama pemesan" required class="w-full border p-2 rounded mb-4">

        <label class="block mb-1 font-semibold">No HP:</label>
        <input type="text" name="no_hp" placeholder="08xxxxxxxxxx" required class="w-full border p-2 rounded mb-4">

        <label class="block mb-1 font-semibold">Alamat:</label>
        <textarea name="alamat" placeholder="Alamat lengkap pengiriman" required class="w-full border p-2 rounded mb-4"></textarea>

        <label class="block mb-2 font-semibold">Produk Dipesan:</label>
        <div id="product-rows">
            <div class="flex gap-2 mb-2 product-row">
                <select name="product_id[]" class="flex-1 border p-2 rounded">
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->nama_produk }} - Rp{{ $product->harga }}</option>
                    @endforeach
                </select>
                <input type="number" name="jumlah[]" placeholder="Jumlah" min="1" required class="w-24 border p-2 rounded">
                <button type="button" class="remove-row text-red-600 px-2">Hapus</button>
            </div>
        </div>

        <button type="button" id="add-row" class="text-blue-600 underline mb-4">+ Tambah Produk</button>

        <div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Buat Pesanan</button>
        </div>
    </form>

    <script>
        document.getElementById('add-row').addEventListener('click', function () {
            const container = document.getElementById('product-rows');
            const newRow = container.querySelector('.product-row').cloneNode(true);
            newRow.querySelector('input').value = '';
            container.appendChild(newRow);
        });

        document.getElementById('product-rows').addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-row')) {
                const rows = document.querySelectorAll('.product-row');
                if (rows.length > 1) {
                    e.target.closest('.product-row').remove();
                }
            }
        });
    </script>
</body>
</html>