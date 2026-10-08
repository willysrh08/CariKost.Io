<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'CariKost.io - Platform Pencarian & Sewa Kos Terverifikasi')</title>
    <meta name="description" content="@yield('meta_description', 'CariKost.io — Platform pencarian kos terverifikasi #1 Indonesia. Temukan kos dekat kampus, harga terjangkau, fasilitas lengkap.')">
    <meta name="keywords" content="kost, cari kos, sewa kos, kos mahasiswa, kos dekat kampus, kos terverifikasi">
    <meta property="og:title" content="CariKost.io - Platform Pencarian & Sewa Kos Terverifikasi">
    <meta property="og:description" content="Platform pencarian kos terverifikasi #1 Indonesia.">
    <meta property="og:type" content="website">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        brand: {
                            DEFAULT: "#1E6BFF",
                            hover: "#0053D4",
                            subtle: "#EFF5FF",
                            dark: "#003FA5"
                        },
                        dark: {
                            900: "#0B0F19",
                            800: "#121C2A",
                            700: "#273140"
                        },
                        muted: "#6B7280",
                        surface: "#F8FAFC",
                        borderSubtle: "#E6E9EF"
                    },
                    fontFamily: {
                        sans: ['"Inter"', 'sans-serif'],
                        display: ['"Plus Jakarta Sans"', 'sans-serif']
                    },
                    boxShadow: {
                        'floating': '0 20px 40px -15px rgba(30, 107, 255, 0.08), 0 2px 10px -2px rgba(0, 0, 0, 0.04)',
                        'card-hover': '0 16px 32px -8px rgba(11, 15, 25, 0.08), 0 4px 12px -2px rgba(11, 15, 25, 0.03)'
                    }
                }
            }
        };
    </script>

    <style>
        @layer base {
            html, body {
                margin: 0;
                padding: 0;
                scroll-behavior: smooth;
            }
            body {
                overscroll-behavior: none;
            }
        }
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-thumb {
            background: #CBD5E1;
            border-radius: 9999px;
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

    @stack('styles')
</head>
<body class="bg-[#F8FAFC] text-[#0B0F19] font-sans antialiased selection:bg-[#1E6BFF] selection:text-white" style="max-width: 1512px; min-height: 982px; margin-left: auto; margin-right: auto; position: relative;">
    @yield('content')
    @stack('scripts')
</body>
</html>
