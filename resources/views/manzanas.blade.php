<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manzanas') }}
        </h2>
    </x-slot>
    <table style="border:solid; margin-left: 5%; border-top: 5%;">
        <thead style="border:solid;">
            <tr style="border:solid;">
                <th style="border:solid;">ID</th>
                <th style="border:solid;">tipoManzana</th>
                <th style="border:solid;">precioKilo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody style="border:solid;">
            @foreach ($manzanas as $manzana)
            <tr style="border:solid;">
                <td style="border:solid;">{{ $manzana->id }}</td>
                <td style="border:solid;">{{ $manzana->tipoManzana }}</td>
                <td style="border:solid;">{{ $manzana->precioKilo }}</td>
                <td style="border:solid;">
                    <form style="display: inline-block;" action="{{ route('manzanas.destroy', $manzana->id) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a style="margin:auto; border:solid; margin:5%" href="{{ route('manzanas.create') }}">Agregar Manzana</a>

    <a style="margin:auto; border:solid; margin:5%" href="{{ route('manzanas.edit') }}">Modificar Manzana</a>
</x-app-layout>