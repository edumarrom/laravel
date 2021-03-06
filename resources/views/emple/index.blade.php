<x-layout>
<div class="flex justify-center mx-auto">
    <div class="flex flex-col">
        <h1 class="text-center mb-4 text-2xl font-semibold">Empleados</h1>

        <div class="w-full">
            <div class="border-b border-gray-200 shadow">
                <table>
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Nombre
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Fecha de alta
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Salario
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Departamento
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Editar
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Borrar
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($empleados as $emples)
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{$emples->nombre}}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{$emples->fecha_alt}} {{-- TODO:  Poner la fecha bonita --}}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{number_format($emples->salario, 2, ',', ' ') . '???'}}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{$emples->denominacion}}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Editar</a>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="px-4 py-1 text-sm text-white bg-red-400 rounded">Borrar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</x-layout>
