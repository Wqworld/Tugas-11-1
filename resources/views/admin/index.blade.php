<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>

<body class="bg-white dark:bg-gray-900">
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <div
                class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">

                <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">selamat datang admin
                    {{ $admin->nama_admin }}</h1>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Static websites are now used to
                    bootstrap lots of websites and are becoming the basis for a variety of tools that even influence
                    both web designers and developers.</p>
                <a href="logout"
                    class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Log out Dari admin
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="">
            <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold text-center mb-1"> Tabel Siswa
            </h1>
            
            <a href="{{ route('siswa.create') }}"
                class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 mx-20 mb-5 border-1">
                Tambah Data
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>


        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-20">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">
                            Nama Siswa
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            NIS
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            NISN
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            STATUS
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $i)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $i->nama_siswa }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $i->nis }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $i->nisn }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $i->status }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="{{ route('siswa.edit',['id'=>$i->id]) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>

                                <a href="{{ route('siswa.delete', ['id' => $i->id]) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>
