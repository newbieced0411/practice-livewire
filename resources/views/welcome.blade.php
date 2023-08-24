<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire Practice</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style></style>
    <livewire:styles />
</head>

<body>
    <main class="w-full">
        <livewire:counter />
        <livewire:comments />
    </main>
    <livewire:scripts />
</body>

</html>
