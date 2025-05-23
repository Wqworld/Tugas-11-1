<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>

<body>


    <div class="min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-900">
        <div
            class="block max-w-5xl p-6 items-center justify-center bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h1
                class="text-center mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl lg:text-6xl text-emerald-50">
                {{ $lulus ? 'Selamat kamu lulus ' : 'Selamat kamu tidak lulus ' }}
            </h1>
            <p
                class="text-center mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                {{ $lulus ? 'Kami dari SMKN 1 KATAPANG Mengucapkan selamat atas Kelulusan kalian atas nama ' : 'kamu dinyatakan tidak lulus dari SMKN 1 KATAPANG ' }}
                <strong>{{ $siswa->nama_siswa }}</strong>
            </p>
        </div>
    </div>
    <a href="logout">
        <p>logout</p>
    </a>


    {{-- <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
    Learn more
    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
  </svg>
</a> --}}

</body>

</html>






{{-- @if ($siswa->status == 'lulus')
      <h1>Selamat {{ $siswa->nama_siswa }}</h1>
      <h1>anda dinyatakan  {{ $siswa->status }}</h1>
  @endif
  @if ($siswa->status == 'tidak_lulus')
      <p>maap sia teu lulus</p>
  @endif --}}
