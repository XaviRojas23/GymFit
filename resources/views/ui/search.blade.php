<ul class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
    @foreach($activities as $activity)
        <li class="p-10 border border-gray-300 bg-white shadow">
           <h2 class="text-2xl font-bold text-blue-400"> {{ $activity->name }} </h2>
           <p class="block text-gray-700 font-normal my-2"> {{ $activity->categoria->name }} </p>
           <p class="block text-gray-700 font-normal my-2"> Descripcion:  <span class="font-bold">{{ $activity->Descripcion}} </span> </p>
           <p class="block text-gray-700 font-normal my-2"> Dificultad: <span class="font-bold">{{ $activity->Dificultad->name }} </span> </p>
           <p class="block text-gray-700 font-normal my-2"> Lugar: <span class="font-bold">{{ $activity->Lugar->name }} </span> </p>
           <a class="bg-blue-500 p-3 rounded inline-block text-xs font-bold uppercase text-white mt-2 mb-4" href="{{ route('activity.show', ['activity' =>$activity->id ]) }}"> Ver actividad </a>
        </li>
    @endforeach
</ul>
