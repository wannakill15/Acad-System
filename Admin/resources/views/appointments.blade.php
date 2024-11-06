<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Appointments') }}
        </h2>
    </x-slot>
    
    <table>
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td>2022-01-01</td>
                <td>10:00 AM</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>



</x-app-layout>
