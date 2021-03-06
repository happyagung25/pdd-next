<div>
    <div class="table-container mb-2">
        <table class="table table-striped table-hover">
            <tr>
                <th>Hak Akses</th>
                <th>Tambah</th>
                <th>Lihat</th>
                <th>Ubah</th>
                <th>Hapus</th>
            </tr>

            <!-- Pengguna -->

            <tr>
                <td>
                    <i class="fas fa-users mr-2"></i>
                    Pengguna
                </td>
                @foreach(array_keys($user) as $action)
                    <td>
                        <label class="form-checkbox">
                            <input wire:model="user.{{ $action }}" type="checkbox">
                            <i class="form-icon"></i>
                        </label>
                    </td>
                @endforeach
            </tr>

            <!-- Identitas Desa -->

            <tr>
                <td>
                    <i class="fas fa-id-card mr-2"></i>
                    Identitas Desa
                </td>
                <td>
                    <label class="form-checkbox">
                        <input type="checkbox" disabled>
                        <i class="form-icon"></i>
                    </label>
                </td>
                <td>
                    <label class="form-checkbox">
                        <input type="checkbox" disabled>
                        <i class="form-icon"></i>
                    </label>
                </td>
                <td>
                    <label class="form-checkbox">
                        <input wire:model="config.update" type="checkbox">
                        <i class="form-icon"></i>
                    </label>
                </td>
                <td>
                    <label class="form-checkbox">
                        <input type="checkbox" disabled>
                        <i class="form-icon"></i>
                    </label>
                </td>
            </tr>
        </table>
    </div>
    
    @if(session()->has('success'))
        <div class="divider"></div>
        <div class="toast toast-success">{{ session('success') }}</div>
        <div class="divider"></div>
    @endif

    <button wire:click="submit" class="btn btn-lg btn-primary">Simpan</button>
    <button wire:click="resetChanges" class="btn btn-lg btn-link">Reset</button>
</div>
