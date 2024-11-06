<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="metrics">
        <div class="metric">
            <i class="fas fa-calendar-check"></i>
            <h3>Total Appointments</h3>
            <p>50</p>
        </div>
        <div class="metric">
            <i class="fas fa-clock"></i>
            <h3>Upcoming Appointments</h3>
            <p>10</p>
        </div>
    </div>


</x-app-layout>
