<div class="w3-display-middle w3-text-white w3-center">
    <h1 class="w3-jumbo" style="color: #8B0000">Ilham & Bunga</h1>
    </br>
    <h2 class="w3-center" style="color: #8B0000"><b>03.03.2024</b></h2>
    </br>
    <form wire:submit="getLink">
        <input placeholder="Masukkan Nama" type="text" wire:model="name">
        <button class="w3-button w3-round w3-opacity w3-hover-opacity-off" style="color: #8B0000" style="padding:8px 60px">
            Dapatkan Link
        </button>
    </form>
    @if ($link)
        <h2 class="w3-center" style="color: #8B0000"><b>{{ $link }}</b></h2>
    @endif
    <p class="w3-center w3-text-grey" id="coverword"></p>
</div>
