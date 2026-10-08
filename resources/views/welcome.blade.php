@extends('layouts.app')

@section('title', 'CariKost.io - Platform Pencarian & Sewa Kos Terverifikasi')

@section('content')

@php
    // Data Array untuk Kategori Cepat (Quick Categories)
    $categories = [
        ['icon' => 'school', 'color' => 'bg-blue-50 text-[#1E6BFF]', 'title' => 'Dekat Kampus', 'desc' => '< 10 Menit Jalan'],
        ['icon' => 'ac_unit', 'color' => 'bg-sky-50 text-sky-600', 'title' => 'Eksklusif AC', 'desc' => 'Sejuk & Nyaman'],
        ['icon' => 'shower', 'color' => 'bg-cyan-50 text-cyan-600', 'title' => 'K. Mandi Dalam', 'desc' => 'Privasi Terjaga'],
        ['icon' => 'key', 'color' => 'bg-amber-50 text-amber-600', 'title' => 'Akses 24 Jam', 'desc' => 'Bebas Jam Malam'],
        ['icon' => 'female', 'color' => 'bg-rose-50 text-rose-500', 'title' => 'Kos Putri Aman', 'desc' => 'CCTV & Penjaga'],
        ['icon' => 'diversity_3', 'color' => 'bg-purple-50 text-purple-600', 'title' => 'Pasutri & Campur', 'desc' => 'Keluarga & Umum'],
    ];

    // Data Array untuk Area Kampus Populer
    $campuses = [
        ['name' => 'Univ. Brawijaya (UB)', 'loc' => 'Malang, Jatim', 'count' => '99+ Kos Tersedia', 'desc' => 'Mulai Rp 650rb/bln • Suhat & Watugong', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCyOWGGBuSFchTii0bsI3sTmBkNdTMj8TGi9W8cTY6OGy3WCXgkCcKE89wkUB-YHIvySgNyNlr-agfYqILyRClFdkw1BBWxZ-gCBu2KA_3NJK3k_2gdjJYWpT0cGR4SrmCO6AfKMtB_iMOUvzzHX6A0oRYbljMjvRRQqLapwnmoKWSH-lgyd0mtn3ia8r0muf4Ji9ssCbNfiD5vqPT7-61D62lPreZtWnPugCF_jfJUiD2NaNjH4gFSr0H3BPTstqJIdhDPvLqC-4-sfQ'],
        ['name' => 'Binus Malang', 'loc' => 'Malang, Jatim', 'count' => '99+ Kos Tersedia', 'desc' => 'Mulai Rp 900rb/bln • Araya & Dieng', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDu44gNlcbN2NGn9Zna6hHBribjMHygkqNjpS8SqTVL21oVXPgWEAn1BCSKnMGpLH7Ozf7p5HJ2fUBzvfSHT394KF2l-PFo4SsJHGYiy-r-xdh9fjuLGePgf9ctH3u4xrEWIiFDWFVmKKzHOXMAxtvhaHrpR2Xybn9v9GK2Qf-sxOjVqrOcx-u21DI-sBSvArmgDpkfosEIpCI4J9FysedMJI7IURFZP9xfUgm3kJbMONtH5z9ZN16LTeh48mmfMPtafLYK9nmDZnNuyQ'],
        ['name' => 'UMM', 'loc' => 'Malang, Jatim', 'count' => '99+ Kos Tersedia', 'desc' => 'Mulai Rp 750rb/bln • Tlogomas & Landungsari', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAbJojG0eBhjYtOATpBIA1fAN9tWjxSm8pH5ez9ktfYn5s7LV2Zm3FP7nof2mJ9Wf7CmJkMBMa7KEQQKxkF7k8uV0BGIHMMyXjRuf6tXnqQNJ4pJHOPf4K2OIOLx6ZNl1Y3f3jcuJB0gWlmEUCRjKH7KJDbc30DKpvD5UT69pXkfT1R8CuOShg6GQyHAqO5BLY1z6c-x4VNLvr6rQpG4X0rr4jGxPz2aF6OA4dUrAMe5oht3Cq86g-_a8aj4XQ-lEuHzBfCk9mvqStoHg'],
        ['name' => 'Polinema', 'loc' => 'Malang, Jatim', 'count' => '99+ Kos Tersedia', 'desc' => 'Mulai Rp 600rb/bln • Soekarno Hatta', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC3hANoAeKkcz24Eeoh7XQD_icuOl-oJtyl-JLk0riWZ5ddWdrBTAIi-EembIZuxwNK0XW8Eu8AOortl4_SEfA-KsNiUcR8PRwWA9zfxo8W2kdPYAF4gp2XIDocEiSFFAkwlMQX8vSwZilBOdLIYnaIjRyKL7XuhGK65F-aCe8wg7_wHv8aY5hkgbVDsf3N_8uqO8npyY0CXj5GsgbDmCdpdsGGPschGFiVjqMPdXTafowQFMqnrky2lH14S3jkLxhxP9b5DuVvs29djQ'],
    ];

    // Data Keunggulan (Why Us)
    $features = [
        ['icon' => 'verified_user', 'bg' => 'bg-blue-100 text-[#1E6BFF]', 'title' => '100% Survei Lapangan', 'desc' => 'Tim independen mengecek dimensi kamar, fasilitas, dan kebersihan secara ketat.'],
        ['icon' => 'chat', 'bg' => 'bg-emerald-100 text-emerald-600', 'title' => 'Kontak Langsung Pemilik', 'desc' => 'Tanya ketersediaan & survei mandiri via WhatsApp tanpa perantara calo.'],
        ['icon' => 'map', 'bg' => 'bg-amber-100 text-amber-600', 'title' => 'Peta Interaktif Presisi', 'desc' => 'Estimasi jarak jalan kaki akurat ke kampus, minimarket, dan stasiun.'],
        ['icon' => 'reviews', 'bg' => 'bg-purple-100 text-purple-600', 'title' => 'Ulasan Jujur Penghuni', 'desc' => 'Baca ulasan transparan dari sesama mahasiswa mengenai kondisi kos.'],
    ];
@endphp

<!-- HEADER / NAVBAR -->
<header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-b border-[#E6E9EF] max-w-[1512px] mx-auto">
    <div class="h-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between gap-6">
        <a href="#" class="flex items-center shrink-0 hover:opacity-95">
            <img src="https://lh3.googleusercontent.com/aida/AEtjO1VmrF5ozxvN683FqVoSeoOEMyIWPIfv4lkUv0rMcTa5pKbBJu_seq4McbZpivam5aMqeE3pecJ2fpt2LEkDS5q9-b8ebUo_HPBWU-Xjj0ceq-pc4rHjrXg2u7Pg1cYRYc8WdmUH1zAVyhbcEJXGOkOPPDPFDsryU-KHXr8BwwQLnnTLlzLDwclsq3mLu5fI95MJ018sNxS_4ozBdTW5tIfWHGJpzoFYworfae-Pme5LPwUnOMikQ77ibWM" alt="CariKost.io Logo" class="h-9 sm:h-10 w-auto object-contain">
        </a>
        <nav class="hidden lg:flex items-center gap-7">
            <a href="#" class="font-display text-[14px] font-semibold text-[#1E6BFF] border-b-2 border-[#1E6BFF] py-2">Cari Kos</a>
            <a href="#" class="font-display text-[14px] font-semibold text-[#424655] hover:text-[#1E6BFF] py-2 transition-colors">Area Kampus</a>
            <a href="#" class="font-display text-[14px] font-semibold text-[#424655] hover:text-[#1E6BFF] py-2 transition-colors">Promo & Diskon</a>
            <a href="#" class="font-display text-[14px] font-semibold text-[#424655] hover:text-[#1E6BFF] py-2 transition-colors">Pusat Bantuan</a>
        </nav>
        <div class="flex items-center gap-3 sm:gap-4">
            <a href="#" class="px-5 py-2.5 rounded-full bg-[#1E6BFF] hover:bg-[#0053D4] text-white text-[13px] font-display font-bold shadow-sm transition-all">Masuk / Daftar</a>
            <button type="button" title="Profil Akun" class="w-10 h-10 rounded-full bg-[#EFF5FF] hover:bg-[#DBE8FE] flex items-center justify-center text-[#1E6BFF] border border-blue-100 transition-colors">
                <span class="material-symbols-outlined text-[20px]">person</span>
            </button>
        </div>
    </div>
</header>

<!-- MAIN WRAPPER -->
<main class="w-full pt-20">

    <!-- HERO SECTION -->
    <section class="relative w-full overflow-hidden bg-gradient-to-b from-[#F3F7FF] via-[#F8FAFC] to-white pt-14 pb-20 lg:pt-20 lg:pb-28 border-b border-[#E6E9EF]/60">
        <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-[48rem] h-96 rounded-full bg-blue-200/35 blur-3xl pointer-events-none"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="font-display text-3xl sm:text-5xl lg:text-[52px] font-extrabold text-[#0B0F19] tracking-tight leading-[1.18] mb-5">
                    Cari &amp; Sewa Kos <span class="text-[#1E6BFF]">Terverifikasi</span><br>
                </h1>
            </div>

            <!-- SEARCH FLOATING CARD -->
            <div class="mt-10 max-w-5xl mx-auto">
                <div class="bg-white rounded-3xl p-4 sm:p-6 shadow-floating border border-[#E6E9EF]">
                    <div class="flex items-center gap-2 pb-4 border-b border-[#F1F4F9]">
                        <span class="material-symbols-outlined text-[#1E6BFF] text-[20px]">tune</span>
                        <span class="font-display font-bold text-sm text-[#0B0F19]">Filter & Pencarian Kos</span>
                    </div>
                    <div class="pt-4 grid grid-cols-1 md:grid-cols-3 gap-3 sm:gap-4">
                        <!-- Location Input -->
                        <div class="bg-[#F8FAFC] border border-[#E6E9EF] rounded-2xl px-4 py-3 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#1E6BFF] flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[22px]">location_on</span>
                            </div>
                            <div class="flex flex-col w-full min-w-0">
                                <span class="font-display font-bold text-[11px] text-[#6B7280] uppercase tracking-wider">Lokasi / Kampus</span>
                                <input type="text" id="searchInput" placeholder="Cari kos atau area..." class="bg-transparent font-medium text-[14px] text-[#0B0F19] placeholder:text-[#9CA3AF] focus:outline-none w-full border-none p-0 mt-0.5">
                            </div>
                        </div>
                        <!-- Tenant Type Select -->
                        <div class="bg-[#F8FAFC] border border-[#E6E9EF] rounded-2xl px-4 py-3 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-gray-100 text-[#5A5E6A] flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[22px]">group</span>
                            </div>
                            <div class="flex flex-col w-full min-w-0">
                                <span class="font-display font-bold text-[11px] text-[#6B7280] uppercase tracking-wider">Tipe Penghuni</span>
                                <select class="bg-transparent font-medium text-[14px] text-[#0B0F19] focus:outline-none w-full border-none p-0 cursor-pointer mt-0.5">
                                    <option value="all">Semua Tipe</option>
                                    <option value="putri">Khusus Putri</option>
                                    <option value="putra">Khusus Putra</option>
                                    <option value="campur">Campur / Pasutri</option>
                                </select>
                            </div>
                        </div>
                        <!-- Budget Select -->
                        <div class="bg-[#F8FAFC] border border-[#E6E9EF] rounded-2xl px-4 py-3 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#1E6BFF] flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[22px]">payments</span>
                            </div>
                            <div class="flex flex-col w-full min-w-0">
                                <span class="font-display font-bold text-[11px] text-[#6B7280] uppercase tracking-wider">Budget</span>
                                <select class="bg-transparent font-medium text-[14px] text-[#0B0F19] focus:outline-none w-full border-none p-0 cursor-pointer mt-0.5">
                                    <option value="all">Semua Budget</option>
                                    <option value="lt-1m">&lt; Rp 1 Juta</option>
                                    <option value="1-2m">Rp 1 - 2 Juta</option>
                                    <option value="gt-2m">&gt; Rp 2 Juta</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="w-full pt-4">
                        <button type="button" class="w-full h-12 rounded-2xl bg-[#1E6BFF] hover:bg-[#0053D4] text-white font-display font-bold text-sm shadow-md transition-all flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-[20px]">search</span>
                            <span>Cari Kos Sekarang</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- QUICK CATEGORIES FILTER -->
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-7 relative z-20">
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3.5">
            @foreach($categories as $cat)
            <a href="#" class="group bg-white rounded-2xl p-4 border border-[#E6E9EF] shadow-sm hover:shadow-card-hover hover:-translate-y-0.5 transition-all text-center flex flex-col items-center">
                <div class="w-12 h-12 rounded-xl {{ $cat['color'] }} group-hover:bg-[#1E6BFF] group-hover:text-white flex items-center justify-center transition-colors">
                    <span class="material-symbols-outlined text-[24px]">{{ $cat['icon'] }}</span>
                </div>
                <span class="font-display font-bold text-[13px] text-[#0B0F19] mt-3">{{ $cat['title'] }}</span>
                <span class="text-[11px] text-[#6B7280] mt-0.5">{{ $cat['desc'] }}</span>
            </a>
            @endforeach
        </div>
    </section>

    <!-- AREA KAMPUS FAVORIT -->
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16">
        <div class="mb-8">
            <div class="flex items-center gap-1.5 mb-1.5">
                <span class="material-symbols-outlined text-[#1E6BFF] text-[18px]">school</span>
                <span class="font-display font-bold text-[12px] uppercase tracking-wider text-[#1E6BFF]">Pilihan Favorit Mahasiswa</span>
            </div>
            <h2 class="font-display font-extrabold text-2xl sm:text-3xl text-[#0B0F19] tracking-tight">Eksplor Kos Dekat Kampus Idamanmu</h2>
            <p class="text-sm text-[#5A5E6A] mt-1">Kemudahan mobilisasi ke gedung kuliah dan sentra kuliner mahasiswa.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($campuses as $campus)
            <a href="#" class="group relative overflow-hidden rounded-3xl aspect-[3/4] shadow-sm hover:shadow-card-hover transition-all duration-300">
                <img src="{{ $campus['img'] }}" alt="{{ $campus['name'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/35 to-transparent"></div>
                <div class="absolute top-4 right-4 px-3 py-1 rounded-full bg-white/20 backdrop-blur-md text-white font-display text-[11px] font-semibold border border-white/20">
                    {{ $campus['loc'] }}
                </div>
                <div class="absolute bottom-5 left-5 right-5 text-white">
                    <span class="inline-block px-2.5 py-0.5 rounded-full bg-[#1E6BFF] text-white font-display text-[11px] font-bold mb-2">{{ $campus['count'] }}</span>
                    <h3 class="font-display font-extrabold text-xl tracking-tight leading-snug">{{ $campus['name'] }}</h3>
                    <p class="text-xs text-gray-200 mt-1 font-medium">{{ $campus['desc'] }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </section>

    <!-- KENAPA MEMILIH CARIKOST.IO? -->
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-12">
        <div class="bg-white rounded-3xl p-8 sm:p-12 border border-[#E6E9EF] shadow-sm">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="font-display font-bold text-[12px] uppercase tracking-wider text-[#1E6BFF]">Standar Keamanan Tertinggi</span>
                <h2 class="font-display font-extrabold text-2xl sm:text-3xl text-[#0B0F19] tracking-tight mt-1.5">Kenapa Harus CariKos di CariKost.io?</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($features as $feat)
                <div class="p-6 rounded-2xl bg-[#F8FAFC] border border-[#E6E9EF] flex flex-col items-start">
                    <div class="w-12 h-12 rounded-xl {{ $feat['bg'] }} flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-[24px]">{{ $feat['icon'] }}</span>
                    </div>
                    <h3 class="font-display font-bold text-[16px] text-[#0B0F19]">{{ $feat['title'] }}</h3>
                    <p class="text-xs sm:text-sm text-[#5A5E6A] mt-2 leading-relaxed">{{ $feat['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</main>

<!-- FOOTER -->
<footer class="w-full bg-white border-t border-[#E6E9EF] mt-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-[#6B7280]">
        <p>&copy; {{ date('Y') }} CariKost.io — Hak Cipta Dilindungi.</p>
        <div class="flex items-center gap-6">
            <a href="#" class="hover:text-[#0B0F19]">Ketentuan Layanan</a>
            <a href="#" class="hover:text-[#0B0F19]">Kebijakan Privasi</a>
        </div>
    </div>
</footer>

@endsection