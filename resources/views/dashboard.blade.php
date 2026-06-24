<x-app-layout>
    
    <x-slot name="header">
        <div class="flex item-center justify-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Buku') }}
        </h2>
    @auth
    @if (auth()->check() && auth()->user()->role == 'admin')
        <a class="btn btn-primary" href="/dashboard/edit">Edit Data</a>
    @endif
    @endauth
        </div>
    </x-slot>

@forelse ($data as $item)
<div class="container mt-3">
    <h4>{{$item->penulis}} | {{$item->judul}}</h4>
    <p>{{$item->deskripsi}}</p>
    <p class="mt-4">{{$item->penerbit}}, Rp. {{$item->harga}}</p>
</div>
@empty
    <p>Data tidak ada</p>
@endforelse
</x-app-layout>
