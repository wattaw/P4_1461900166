<form action="{{ url('toko_0166/' . $toko_0166->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    Id: <input type="text" name="id" value="{{ $toko_0166->id }}"><br>
    Nama Pasien: <input type="text" name="judul" value="{{ $toko_0166->judul }}"><br>
    Alamat: <input type="text" name="tahun_terbit" value="{{ $toko_0166->tahun_terbit }}"><br>
    <button type="submit">Simpan</button>
</form>