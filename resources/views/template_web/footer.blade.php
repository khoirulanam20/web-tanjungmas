<!------------------- FOOTER ------------------------>
<footer class="border-top mt-5">
    <div class="container mt-5 mb-5">
        <div class="row d-flex flex-lg-row flex-column-reverse">
            <div class="col-lg-5 col-12 mt-lg-0 mt-4">
                <div class="d-flex">
                    @if(isset($profile) && $profile->logo)
                        <img src="/images/logo/{{ $profile->logo }}" alt="logo" width="40" height="40" />
                    @else
                        <img src="/images/logo/default-icon.png" alt="default logo" width="40" height="40" /> <!-- Ganti dengan ikon default -->
                    @endif
                    <h3 class="mt-2 ms-1">{{ isset($profile) ? $profile->nama_brand : 'Nama Brand' }}</h3>
                </div>
                <div>
                    <span class="text-black-50 pt-2 pb-xxl-4">
                        © <span id="currentYear"></span>
                        <a href="https://songkokmarwah.com/" class="text-decoration-none text-black-50">
                            {{ isset($profile) ? $profile->name : 'Nama Perusahaan' }}™
                        </a><br />
                        All Rights Reserved.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-12 d-flex flex-column mt-3 mt-lg-0">
                <h5>Team Pemasaran Kami</h5>
                @if(isset($teams) && count($teams) > 0)
                    @foreach ($teams as $team)
                        <a href="" class="link--footer text-decoration-none text-black-50 mb-2">
                            {{ $team->wilayah }} : {{ $team->name }} ( {{ $team->no_hp }} )
                        </a>
                    @endforeach
                @else
                    <span class="text-black-50">Tidak ada tim pemasaran.</span>
                @endif
            </div>
            <div class="col-lg-3 col-12 d-flex flex-column">
                <h5>Sosmed</h5>
                @if(isset($sosmeds) && count($sosmeds) > 0)
                    @foreach ($sosmeds as $sosmed)
                        <a href="{{ $sosmed->link }}" class="link--footer text-decoration-none text-black-50 mb-2">
                            <i class="me-2 bi bi-{{ strtolower($sosmed->nama) }}"></i>Songkok Marwah
                        </a>
                    @endforeach
                @else
                    <span class="text-black-50">Tidak ada akun sosial media.</span>
                @endif
            </div>
        </div>
    </div>
</footer>
<!------------------- END FOOTER ------------------------>
