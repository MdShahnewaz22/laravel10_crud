<x-app-layout>

    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboar') }}
        </h2>

    </x-slot> --}}



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Company
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('companies.create') }}">Company Add</a></li>
                        <li><a class="dropdown-item" href="{{ route('companies.index') }}">Company List</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>



</x-app-layout>
