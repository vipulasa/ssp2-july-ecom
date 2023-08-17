<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Analytics') }}
        </h2>
    </x-slot>

    <div class="py-12 product">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table>
                <thead>
                    <tr>
                        <th>model_name</th>
                        <th>model_id</th>
                        <th>analytic_data_type</th>
                        <th>timestamp</th>
                        <th>user_id</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hits as $data)
                        <tr>
                            <td>{{ $data->model_name }}</td>
                            <td>{{ $data->model_id }}</td>
                            <td>{{ $data->analytic_data_type }}</td>
                            <td>{{ $data->timestamp }}</td>
                            <td>{{ $data->user_id }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
